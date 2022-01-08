<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockRequest;
use App\Product;
use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index(){
        $stocks = Stock::all();
        return view ('welcome' , compact('stocks'));
    }

    public function create(){
        return view ('createStock');
    }

    public function store(StockRequest $request){
        $stocks = new Stock();
        $stocks->stock_name = $request->input('stock_name');

        $stocks->save();
        return redirect()->route('index.stocks');
    }

    public function show($id){
        $productsInStock = Product::where('stock_id' , '=' , $id)->where('inStock' , '=' , 1)->get();
        return view ('showProducts' , compact('productsInStock'));
    }

    public function outProduct($id){
        $enrollProduct = Product::find($id);
        $enrollProduct->inStock = 0;
        $enrollProduct->save();

        return redirect()->route('index.products');
    }
}
