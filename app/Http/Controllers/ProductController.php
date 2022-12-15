<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $list = Product::all();
        return view('product.list', ['list' => $list]);
    }
    public function show($id){
        $item = Product::find($id);
        return view('product.show', ['item' => $item]);
    }
    public function create(){
        return view('product.create');
    }
    public function store(request $request){
        Product::create([
            'title'=>$request->input('title'),
            'desc'=>$request->input('description'),
            'img_url'=>$request->input('gambar_url'),
            'price'=>$request->input('price'),
            'price_discount'=>$request->input('price_discount')

        ]);
        return redirect('products');
    }
    public function destroy($id){
        Product::find($id)->delete();
        return redirect('products');
    }
    public function edit($id){
        $item = Product::find($id);
        return view('product.edit', [
            'item'=>$item
        ]);
    }
    public function update($id, Request $request){
        $item = Product::find($id);
        $item->update([
            'title'=>$request->input('title'),
            'desc'=>$request->input('description'),
            'img_url'=>$request->input('gambar_url'),
            'price'=>$request->input('price'),
            'price_discount'=>$request->input('price_discount')

        ]);
        return redirect('products');
    }
}
