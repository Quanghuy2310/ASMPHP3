<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Support\Facades\Storage;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = product::all();
        $category = category::all();
        return view('admin.products.index', compact('products','category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $products = product::all();
        $category = category::all();
        return view('admin.products.create',compact('category','products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $products=$request->except('image');
        if($request->hasFile('image')){
            $pathFile= Storage::putFile('products',$request->file('image'));

            $products['image']='storage/'.$pathFile;
        }
        Product::query()->create($products);
        
        return redirect()->route('products.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
         
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        $category = Category::query()->pluck('name','id')->all();
        return view('admin.products.edit',compact('category','product'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        $data = $request->except('image');
        if($request->hasFile('image')){
            $pathFile = Storage::putFile('products',$request->file('image'));
            $data['image']='storage/'.$pathFile;

        }
        $currentImage=$product->image;
        $product->update($data);

        if($request->hasFile('image') 
        && $currentImage 
        && file_exists(public_path($currentImage))){
            unlink(public_path($currentImage));
        }
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        if($product->image && file_exists(public_path($product->image))
        ){
            unlink(public_path($product->image));
        }
         
        return redirect()->route('products.index');
    }
}
