<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;



class DataController extends Controller
{
    //
    public function index(){
        $data = product::all();
        $categorys = category::all();
        $banners = banner::query()->first('id')->paginate(6);
        return view('index',compact('data','categorys','banners'));
    }

    public function show($id){
        $categorys = category::all();
        $product = product::find($id);
         return view('product.product-detail',compact('product','categorys'));

    }
}
