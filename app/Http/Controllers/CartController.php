<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    //
    function show()
    {
        $items= DB :: table('carts') -> select("carts.Quantity", "product.price", "product.Title", "product.picPath","product.productID")->join('product','product.productID','=','carts.productID')->get();

        return view("cart",["items"=>$items]);
    }
    public function AddToCart()
    {   
        $product = new Cart();
        $product->productID = request('productID');
        $check = Cart::where('productID', '=',  $product->productID)->exists();

        if($check){
            $UpdateDetails = Cart::where('productID', '=',  $product->productID)->first();
            $UpdateDetails->Quantity += 1;
            $UpdateDetails->save();
        } else {
            $product->cart_id = 1;
            $product->Quantity = 1;
            $product->save();
        }        
        
        return redirect('/cart');
    }
    public function UpdateCart()
    {
        $id= request("productID");
        $q=(int)request("quantity");
        $UpdateDetails = Cart::where('productID', '=',  $id)->first();
        $UpdateDetails->Quantity += $q;
        $UpdateDetails->save();
        if ($q == 0)
        {
            DB::table('carts')->where('productID', $id)->delete();
        }
        DB::table('carts')->delete($id);
        return redirect('/cart');
    }
    public function RemoveCart()
    {
        $id= request("productID");
        DB::table('carts')->where('productID', '=',  $id)->delete();
        return redirect('/cart');
    }

}