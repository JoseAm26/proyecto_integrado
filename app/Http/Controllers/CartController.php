<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Venta;
use App\Models\Detalle;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shop()
    {
        $products = Product::all();
    //    dd($products);
        return view('shop')->with(['products' => $products]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        return view('cart')->with(['cartCollection' => $cartCollection]);;
    }
    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a sú Carrito!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('shop')->with('success_msg', 'Car is cleared!');
    }

    public function procesopedido(Request $request)
    {
        if(\Cart::getContent()->count()>0):

            $pedido = new Venta();
            $pedido->codigo = time();
            $pedido->subtotal = \Cart::getTotal();
            $pedido->impuesto = \Cart::getTotal()*0.21;
            $pedido->total = \Cart::getTotal()*1.21;
            $pedido->estado = 0;
            $pedido->id_user = Auth::user()->id;
            $pedido->save();


            foreach(\Cart::getContent() as $r):
                $detalle = new Detalle();
                $detalle->cantidad = $r->quantity;
                $detalle->nombre = $r->name;
                $detalle->precio = $r->price;
                $detalle->usuario = Auth::user()->name;
                $detalle->total = \Cart::getTotal()*1.21;
                $detalle->id_venta = $pedido->id;
                $detalle->id_producto = $r->id;
                $detalle->save();

            endforeach;

            \Cart::clear();

            return redirect()->route('shop');;

        else:
            return redirect()->route('venta.index');
        endif;
    }


}
