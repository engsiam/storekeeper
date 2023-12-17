<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Random;

class ProductController extends Controller
{
    function list(){
        $products = Product::all();
        return view('backend.tables', compact('products'));
    }


    function add_product(){
        return view('backend/add_product');
    }


    function form_check(Request $request){
        $request->validate([
            'product_name' => 'required',
            'product_image' => 'required',
            'product_price' => 'required',
            'product_quantity' => 'required'
        ], 
        [
            'product_name.required' => "Your Product name is empty",
            'product_image.required' => "Please select an Image",
            'product_price.required' => "Your Product price is empty",
            'product_quantity.required' => "Your Product Quantity is empty",
        ]);
        $product_photo =  $request->file('product_image');
        $photoName = 'products-'.time().'-'.rand(1,10000).'-'.$product_photo->getClientOriginalName();
        $product_photo->move(public_path('/uploads/products'), $photoName);

        DB::table('products')->insert([
            'user_id'      => Auth::user()->id,
            'product_name' => $request->product_name,
            'product_image' => $photoName,
            'product_price' => $request->product_price,
            'product_quantity' => $request->product_quantity,
        ]);
        return back()->withSuccess("Product Inserted Successfully");
      
    }



    function edit_product_form(Request $request, $id){
        $product = Product::find($id);
        return view('backend.edit_product', compact('product'));
    }



    function product_update(Request $request, $id){
        Product::find($id)->update([
            'product_name' => $request->input('update_product_name'),
            'product_price' => $request->input('update_product_price'),
            'product_quantity' => $request->input('update_product_quantity'),
        ]);
      return back()->withSuccess('Product Updated Successfully');
    }



    function qty_update (Request $request, $id){
        $previous_quantity =  Product::find($id)->product_quantity;
        $current_quantity = $request->input('my_qty');
        $new_quantity = $previous_quantity - $current_quantity;
        Product::find($id)->update([
            'product_quantity' => $new_quantity
        ]);
        return back()->withSuccess('Quantity Updated Successfully');
    }
}
