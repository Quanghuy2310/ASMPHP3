<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categorys = category::all();
        return view('admin.categorys.index', compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categorys = category::all();
        return view('admin.categorys.create',compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorys=$request->except('image');
        //
        category::query()->create($categorys);
        return redirect()->route('categorys.index');
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
    public function edit(Category $category)
    {
        //
        $categorys = category::query()->pluck('name','id')->all();
        return view('admin.categorys.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
        $data = $request->except('image');
        $category->update($data);
        return redirect()->route('categorys.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect()->route('categorys.index');
    }
}
