<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $coupon = coupon::all();
        return view('admin.coupon.index',compact('coupon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $coupon = coupon::all();
        return view('admin.coupon.create',compact('coupon'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $coupon=$request->except('image');

        coupon::query()->create($coupon);
        return redirect()->route('coupon.index');
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
    public function edit(Coupon $coupon)
    {
        //
        return view('admin.coupon.edit',compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coupon $coupon)
    {
        //
        $data = $request->except('image');
        $coupon->update($data);
        return redirect()->route('coupon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coupon $coupon)
    {
        //
        $coupon->delete();
        return redirect()->route('coupon.index');
    }
}
