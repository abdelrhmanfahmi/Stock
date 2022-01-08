<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use App\Stock;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::where('inStock' , '=' , 0)->get();
        return view ('products' , compact('products'));
    }

    public function create(){
        $stocks = Stock::all();
        return view ('createProduct' , compact('stocks'));
    }

    public function store(ProductRequest $request){
        $products = new Product();
        $products->product_name = $request->input('product_name');
        $products->product_price = $request->input('product_price');
        $products->stock_id = $request->input('stock_id');
        $products->inStock = 0;

        $products->save();
        return redirect()->route('index.products');
    }

    public function enroll($id){
        $enrollProduct = Product::find($id);
        $enrollProduct->inStock = 1;
        $enrollProduct->save();
        
        return redirect('/productsOfStocks/show/' . $enrollProduct->stock_id);
    }
}
