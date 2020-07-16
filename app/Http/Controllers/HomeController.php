<?php namespace App\Http\Controllers;

use App\Models\Product;
use Request;

class HomeController extends Controller {

    public function showHome()
    {
        $products = Product::select()
            ->get();

        if(count($products) > 0)
        {
            return view('home',[
                "products" => $products
            ]);
        }
        else
        {
            return view('home',[
                "message" => "Something went wrong"
            ]);
        }

    }

    public function showMen(){

        $products = Product::select()
            ->where("type","=","M")
            ->get();

        if(count($products) > 0)
        {
            return view('home',[
                "products" => $products
            ]);
        }
        else
        {
            return view('home',[
                "message" => "Something went wrong"
            ]);
        }
    }

    public function showWomen(){

        $products = Product::select()
            ->where("type","=","F")
            ->get();

        if(count($products) > 0)
        {
            return view('home',[
                "products" => $products
            ]);
        }
        else
        {
            return view('home',[
                "message" => "Something went wrong"
            ]);
        }
    }

    public function showProduct() {

        $pid = Request::input('pid');
        $products = Product::select()
            ->where("id","=",$pid)
            ->get();

        if(count($products) > 0)
        {
            return view('product',[
                "product" => $products
            ]);
        }
        else
        {
            return view('home',[
                "message" => "Something went wrong"
            ]);
        }

    }
}
