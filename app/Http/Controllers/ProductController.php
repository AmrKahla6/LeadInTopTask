<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Stock;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Select Product and paginate it to show
        $prodcts = Product::with('stock')
                    ->select('id','productName','productCode','productImage')
                    ->latest()
                    ->paginate(10);
        return view('products.index',compact('prodcts'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sale(Request $request)
    {
        //Validate first
        $validatedData = $request->validate([
            'product_id'   => 'required',
            'numOfProduct' => 'required',
        ],[
            'product_id.required'    => 'Product is required',
            'numOfProduct.required'  => 'Number Of Product is required',
        ]);

        //Find product
        $prodct = Product::findOrFail($request->product_id);

        //Find stock
        $stock  = Stock::where('product_id',$prodct->id)->first();

        //check if stock number of product < request number
        if($request->numOfProduct > $stock->numOfProduct){
            session()->flash('error','This number not exist in stock');
            return redirect()->back();
        }

        //Opertion on stock to decress number of product
        $stock->numOfProduct =  $stock->numOfProduct - $request->numOfProduct;

        //Save new number of product
        $stock->save();
        session()->flash('success','Sale Added Successfuly');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
