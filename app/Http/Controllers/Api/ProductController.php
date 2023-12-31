<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Validator;

class ProductController extends BaseController
{
    public function index()
    {
        $products = Product::all();

        // return $this->sendResponse($products->toArray(), 'Products retrieved');
        return $this->sendResponse(ProductResource::collection($products), 'Products retrieved');

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required',
        ]);

        if($validator->fails())
        {
            return $this->sendError('Validation Error', $validator->errors());
        }

        $product = Product::create($request->all());
        return $this->sendResponse(new ProductResource($product), 'Product Created Successfully');
    }

    public function show($id)
    {
        $product = Product::find($id);
        if(is_null($product))
        {
            return $this->sendError('Product not found');
        }

        return $this->sendResponse(new ProductResource($product), 'Product retrieved');
    }

    public function update(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required',
        ]);

        if($validator->fails())
        {
            return $this->sendError('Validation Error', $validator->errors());
        }

        $product->update($request->all());
        return $this->sendResponse(new ProductResource($product), 'Product updated');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return $this->sendResponse(new ProductResource($product), 'Product deleted');
    }
}
