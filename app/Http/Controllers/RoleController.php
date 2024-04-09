<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $role = Role::all();
        return view('admin.role.index',compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $role = role::all();
        return view('admin.role.create',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $role=$request->except('avatar');
        //
        role::query()->create($role);
        return redirect()->route('roles.index');
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
    public function edit(Role $role)
    {
        //
        $role = role::query()->pluck('name','id')->all();
        return view('admin.role.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
        $data = $request->except('avatar');
        $role->update($data);
        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
        $role->delete();
        return redirect()->route('roles.index');
    }
}
