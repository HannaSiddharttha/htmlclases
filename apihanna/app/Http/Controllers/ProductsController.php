<?php

namespace App\Http\Controllers;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Product;

class ProductsController extends BaseController{
    public function index(){

        if($data = Product::all()) {
            return response()->json([
                'message' => 'Products found',
                'products' => $data,
                'success' => true,
            ]);
        }
        return response()->json([
            'message' => 'no Products found',
            'success' => false,
        ]);
    }

    public function show($id) {

        $data = Product::where('id', $id)->get();

        if(count($data) > 0){
            return response()->json([
                'message' => 'Product found',
                'product' => $data,
                'success' => true,
            ]);
        }else{
            return response()->json([
                'message' => 'no Product found',
                'success' => false,
            ]);
        }
    }

    public function store(Request $request){
        $product = new Product;

        if($request->input('name')){
            $product->name = $request->input('name');
        }else{
            return response()->json([
                'message' => 'Name is empty',
                'success' => false,
            ]);
        }

        if($request->input('price')){
            $product->price = $request->input('price');
        }else{
            return response()->json([
                'message' => 'Price is empty',
                'success' => false,
            ]);
        }

        $product->save();

        return response()->json([
            'message' => 'Product added succesfully',
            'success' => true,
        ]);
    }

    public function update(Request $request, $id){
        if($product = Product::where('id',$id)->first()) {
            if($request->input('name')){
                $product->name = $request->input('name');
            }else{
                return response()->json([
                    'message' => 'Name is empty',
                    'success' => false,
                ]);
            }

            if($request->input('price')){
                $product->price = $request->input('price');
            }else{
                return response()->json([
                    'message' => 'Price is empty',
                    'success' => false,
                ]);
            }

            $product->save();

            return response()->json([
                'message' => 'Product updated succesfully',
                'success' => true,
            ]);
        }
        return response()->json([
                'message' => "Product doesn't exists",
                'success' => false,
            ]);

    }

    public function destroy($id){
        if($product = Product::where('id',$id)->first()) {
            $product->delete();
            return response()->json([
                'message' => 'Product deleted succesfully',
                'success' => true,
            ]);
        }
        return response()->json([
                'message' => "Product doesn't exists",
                'success' => false,
            ]);

    }
}
