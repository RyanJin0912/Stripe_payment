<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Session;
use App\Cart;
class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view('shop.index',['products'=>$products]);
    }//getIndex()


    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldcart = Session::has('cart') ? Session::get('cart') : null;

            $cart = new Cart($oldcart);

                        $cart->add($product, $product->id);//add('', '')



            $request->session()->put('cart',$cart);

                dd($request->session()->get('cart'));
                    return redirect()->route('product.index');
    }
    //getAddToCart
}
