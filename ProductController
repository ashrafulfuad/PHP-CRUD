<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;

class ProductController extends Controller
{
    function addproductview()
    {
      $deleted_products = Product::orderBy('deleted_at', 'desc')->onlyTrashed('id')->get();
      $products = Product::orderBy('id', 'desc')->paginate(5);
      return view('product/view', compact('products', 'deleted_products'));
    }
    function productinsert(Request $request)
    {
      $request->validate([
        'product_name' => 'required',
        'product_price' => 'required|numeric',
      ]);
      Product::insert([
        'product_name' => $request->product_name,
        'product_price' => $request->product_price,
        'created_at' => Carbon::now(),
      ]);
      return back()->with('status', 'Product Inserted Successfully!');
    }
    function productdelete($product_id)
    {
      Product::findOrFail($product_id)->delete();
      return back()->with('delete_status', 'Product Deleted Successfully!');
    }
    function productrestore($product_id)
    {
      Product::withTrashed()->findOrFail($product_id)->restore();
      return back();
    }
    function productedit($product_id)
    {
      $product_edit = Product::findOrFail($product_id);
      return view('product/edit', compact('product_edit'));
    }
    function producteditinsert(Request $request)
    {
      Product::findOrFail($request->product_id)->update([
        'product_name' => $request->product_name,
        'product_price' => $request->product_price,
      ]);
      return back();
    }
}
