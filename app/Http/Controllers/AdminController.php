<?php namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AppUser;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    function showAdmin()
    {
        return view ("admin");
    }
    function showAddProduct()
    {
        return view("addproduct");
    }

    function showProduct()
    {
        $productList = Product::select()
            -> get();
        return view("deleteproduct",[
            "productList" => $productList
        ]);
    }

    function addProduct()
    {

        $name = Request::input('txt_name');
        $price = Request::input('txt_price');
        $type = Request::input('txt_type');
        $description = Request::input('txt_area_description');

        if(Request::file('img_product') != null)
        {
            $destinationPath = 'images'; // upload path
            $extension = Request::file('img_product')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // rename image
            Request::file('img_product')->move($destinationPath, $fileName); // uploading file to given path
            $image = $fileName;

        }
        else
        {
            return redirect()->route("add-product")->with("message","Please add the image");
        }

        $create = Product::create([
            "name" => $name,
            "price" => $price,
            "type" => $type,
            "description" => $description,
            "image" => $image
        ]);

        if($create)
        {
            return redirect()->route("show-product")->with("message","Successfully added");
        }
        else
            return redirect()->route("show-product")->with("message","Failed");



    }

    function deleteProduct()
    {
        $id = Request::input("txt_id");
        $delete = Product::select()
            ->where("id", "=", $id)
            ->delete();
        if ($delete)
        {
            return redirect()->route("show-product")->with("message", "deleted successfully");
        }
        else
        {
            return redirect()->route("show-product")->with("message", "something went wrong");
        }
    }

    function showEditProduct()
    {
        $pid = Request::input('txt_id');

        $product = Product::select()
            ->where("id","=",$pid)
            ->get();

        if(count($product) > 0)
        {
            return view("editproduct",[
                "product" => $product
            ]);
        }

        return redirect()->route("show-product");
    }
    
    function editProduct()
    {
        $id = Request::input("id");
        $name = Request::input("txt_name");
        $price = Request::input("txt_price");
        $type = Request::input("txt_type");
        $description = Request::input("txt_description");

        $check =  Product::select()
            ->where("id","=",$id)
            ->get();

        if($check)
        {
            $update = Product::select()
                ->where("id","=","$id")
                ->update([
                   "name" => $name,
                    "price" => $price,
                    "type" => $type,
                    "description" => $description
                ]);
            if ($update)
            {
                return redirect()->route("edit-product")-> with("message", "Successfully edited");
            }
            else
            {
                return redirect()->route("edit-product")-> with("message", "Something went wrong");
            }
        }
    }
}