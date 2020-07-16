<?php namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderedProducts;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class CartController extends Controller {

	public function showCart()
    {
        $uid = Session::get('user_id');
        $totalCost = 0;

        $cart = DB::table('tb_cart')
            ->join('tb_product','tb_cart.pid','=','tb_product.id')
            ->select('tb_product.id','tb_product.name','tb_product.price','tb_cart.quantity')
            ->where('tb_cart.uid','=',$uid)
            ->get();

        if(count($cart) > 0)
        {
            for($i = 0;$i < count($cart); $i++){

                $totalCost += $cart[$i]->price*$cart[$i]->quantity;
            }
        }

        return view('cart',[
            "list" => $cart,
            "totalCost" => $totalCost
        ]);
    }
    public function addToCart()
    {

        $id = Input::get('id');
        $quant = Input::get('quantity');
        $uid = Session::get('user_id');
        $pid = Product::select("id")
            ->where("id","=",$id)
            ->get();

        if(count($pid) > 0)
        {
            $pid = $pid[0]['id'];
            $quantity = Cart::select("quantity")
                ->where("pid","=",$pid)
                ->where("uid","=",$uid)
                ->get();
            if(count($quantity) > 0){

                $quantity = $quantity[0]['quantity'];
                $update = Cart::select()
                    ->where("pid","=",$pid)
                    ->where("uid","=",$uid)
                    ->update([
                        "quantity" => ($quantity + $quant)
                    ]);

                if($update){
                    echo "Product added";
                }
            }
            else{

                $add = Cart::create([
                    "pid" => $pid,
                    "uid" => $uid,
                    "quantity" => $quant
                ]);
                if($add){
                    echo "Product added";
                }

            }
        }
        else{

            return "No such product";
        }

    }

    function deleteFromCart(){

        $id = Input::get('id');

        $delete = Cart::select()
            ->where("pid","=",$id)
            ->delete();

        if($delete){
            return redirect()->route('show-cart')->with("message","Deleted");
        }
        else{
            return redirect()->route('show-cart')->with("message","Failed to delete");
        }


    }

    function checkout(){

        $uid = Session::get('user_id');
        $totalCost = 0;

        $cart = DB::table('tb_cart')
            ->join('tb_product','tb_cart.pid','=','tb_product.id')
            ->select('tb_product.id','tb_product.name','tb_product.price','tb_cart.quantity')
            ->where('tb_cart.uid','=',$uid)
            ->get();


        if(count($cart) > 0)
        {
            for($i = 0;$i < count($cart); $i++){

                OrderedProducts::create([
                    "pid" => $cart[$i]->id,
                    "quantity" => $cart[$i]->quantity,
                    "uid" => $uid
                ]);
                $totalCost += $cart[$i]->price*$cart[$i]->quantity;
            }
        }

        Order::create([
            "uid" => $uid
        ]);

        Cart::truncate();

        return view('checkout',[
            "cart" => $cart,
            "totalCost" => $totalCost
        ]);


    }

}
