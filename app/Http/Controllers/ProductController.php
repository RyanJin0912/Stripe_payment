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
        $product = Product::find($id);//product商品
        $oldcart = Session::has('cart') ? Session::get('cart') : null;

            $cart = new Cart($oldcart);

                        $cart->add($product, $product->id);//add('', '')



            $request->session()->put('cart',$cart);

//                dd($request->session()->get('cart'));
                    return redirect()->route('product.index');
    }
    // $oldcart
    //if(Session::has('cart'))
    //Session::get('cart')
    //
    //


    public function getCart()
    {
                if(!Session::has('cart'))
                {
                    return view('shop.shoppingcart');
                }//Session::has('cart') = Session::get('cart')->totalQty:''    !Session::has('cart') = shop.shopping-cart

                    $oldcart = Session::get('cart');
                    $cart = new Cart($oldcart);

            return view('shop.shoppingcart',['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
    //getCart()


    public function getCheckout()
    {
            if(!Session::has('cart'))
            {
                return view('shop.shoppingcart');
            }
            //Session::has('cart') ? Session::get('cart') : null;

                $oldcart = Session::get('cart');//判斷是否get('cart')

                $cart = new Cart($oldcart);

                    $total = $cart->totalPrice;//所有價錢

                        return view('shop.checkout',['total'=> $total]);
    }
    //getCheckout()


}
