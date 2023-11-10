<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function  create(){
        return view('product.create');
    }

    public function createProduct(Request $request){
        $data = $request->all();
        Product::create($data);
        echo 'Thêm thành công';
        return view('product.create');
    }

    public function store(){
        $products = Product::all();
        return view('product.product',['products' => $products]);
    }

    public function updateProduct($id){
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id){
        $product = Product::findOrFail($id);

        $data = $request->all();
        $product->update($data);
        return redirect()->route('store')->with('success', 'Cập nhật dữ liệu thành công');
    }

    public function deleteProduct($id){
        $product = Product::findOrFail($id);

        $product->delete();
        return redirect()->route('store')->with('success', 'Xóa dữ liệu thành công');
    }

    public function search(Request $request){
        $query = $request->input('query');

        $products = Product::where('name', 'LIKE', '%' . $query . '%')->get();

        return view('product.product', compact('products','query'));
    }

}
