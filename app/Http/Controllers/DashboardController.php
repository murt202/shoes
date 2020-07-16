<?php namespace App\Http\Controllers;

use App\Models\AppUser;
use Illuminate\Support\Facades\Input;

class DashboardController extends Controller
{
    function showDashboard()
    {
//        $username = $_GET["txt_username"];


        $username = Input::get("txt_username");

        $users = AppUser::select()
            ->count();

        $usersList = AppUser::select()
            ->get();

        $details = [
            "first_name" => "keyur",
            "last_name" => "sakaria",
            "course" => "ITLH"
        ];


        return view("dashboard", [
            "name" => "huzefa",
            "college" => "some college",
            "course" => "IT",
            "hobbies" => ["cricket", 'football', "cooking"],
            "details" => $details,
            "users" => $users,
            "usersList" => $usersList
        ]);
    }


    function userCount()
    {
        var_dump("user count");
    }

    function deleteUser()
    {
        $id = Input::get("txt_id");
        $delete = AppUser::where("id", "=", $id)
            ->delete();
        if ($delete)
        {
            return redirect()->route("dashboard")->with("message", "deleted successfully");
        }
        else
        {
            return redirect()->route("dashboard")->with("message", "something went wrong");
        }
    }
}
