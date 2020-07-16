<?php namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AppUser;
use Illuminate\Support\Facades\DB;
use Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    function showLoginPage()
    {
        if(Session::has('user_id'))
            return redirect()->route("home");
        else
            return view("login");
    }

    function validateLogin()
    {
        $username = Request::input("txt_username");
        $password = Request::input("txt_password");

        $admin = Admin::select()
            ->where("username","=",$username)
            ->where("password", "=", $password)
            ->get();

        if(count($admin) > 0)
        {
            Session::put("admin",true);
            Session::put("user_id", $admin[0]["id"]);
            return redirect()->route("home");
        }
        else
        {
            $user = AppUser::select()
                ->where("username", "=", $username)
                ->where("password", "=", $password)
                ->get();


            if (count($user) > 0)
            {
                Session::put("user_id", $user[0]["id"]);

                return redirect()->route("home");
            }
            else
            {
                return redirect("login")->with("message", "Invalid credentials");
            }
        }
    }

    function logout()
    {
        if(Session::has('user_id'))
        {
            Session::flush();
        }
        return redirect()->route("home");
    }

    function showRegisterPage()
    {
        return view("register");
    }

    function postRegister()
    {
        $message = [
            "txt_first.required" => "Please Enter First Name",
            "txt_last.required" => "Please Enter Last Name",
            "txt_username.required" => "Please Enter username",
            "txt_password.required" => "Please Enter password",
            "txt_password_confirmation.confirmed" => "Password does not match",
            "txt_email.required" => "Please Enter a valid email id",
            "txt_mob_num.required.min" => "Please Enter a valid mobile number",

        ];
        var_dump($message);

        $validator = Validator::make(Request::all(), [
            "txt_first" => "required",
            "txt_last" => "required",
            "txt_username" => "required",
            "txt_password" => "required|confirmed",
            "txt_password_confirmation" => "required",
            "txt_email" => "required",
            "txt_mob_num" => "required|min:10"
        ], $message);

        if ($validator->passes()) {
            $create = AppUser::create([
                "first_name" => Request::input("txt_first"),
                "last_name" => Request::input("txt_last"),
                "username" => Request::input("txt_username"),
                "password" => Request::input("txt_password"),
                "email" => Request::input("txt_email"),
                "mobile" => Request::input("txt_mob_num")

            ]);
            if ($create) {
                return redirect()->route("home")->with("message", "User successfully created");
            }
            else {
                return redirect()->route("show-register-page")->with("message", "Unable to create the user");
            }
        }
        else {

            echo Request::input("txt_password")." ".Request::input("txt_password_confirmation");
            return redirect()->route("show-register-page")->with("message", $validator->errors()->first());
        }
    }

    public function showChangePassword()
    {
        return view("change-password");
    }

    public function postChangePassword()
    {
        $validator = Validator::make(Request::all(), [
            "txt_old" => "required",
            "txt_new" => "required|confirmed",
            "txt_new_confirmation" => "required"
        ]);

        if ($validator->passes())
        {
            $check = AppUser::select()
                ->where("id", "=", Session::get("user_id"))
                ->where("password", "=", Request::input("txt_old"))
                ->count();
            if ($check > 0)
            {
                $update = AppUser::select()
                    ->where("id", "=", Session::get("user_id"))
                    ->where("password", "=", Request::input("txt_old"))
                    ->update([
                        "password" => Request::input("txt_new")
                    ]);
                
                if ($update)
                {
                    return redirect()->route("dashboard")->with("message", "Password updated successfully");
                }
                else
                {
                    return redirect()->route("change-password")->with("message", "Unable to change your password");
                }
            }
            else
            {
                return redirect()->route("change-password")->with("message", "Old password does not match");
            }
        }
        else
        {
            return redirect()->route("change-password")->with("message", $validator->errors()->first());
        }
    }

    function showAboutPage(){

        return view("about_us");
    }
}
