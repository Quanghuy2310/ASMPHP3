<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = User::all();
        $role = Role::all();
        return view('admin.user.index',compact('user','role'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = user::all();
        $role = role::all();
        return view('admin.user.create',compact('role','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        $users=$request->except('avatar');
        if($request->hasFile('avatar')){
            $pathFile = Storage::putFile('users',$request->file('avatar'));

            $users['avatar'] = 'storage/'.$pathFile;
        }
        User::query()->create($users);
        return redirect()->route('users.index');
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
    public function edit(User $user)
    {
        //
        $role = Role::query()->pluck('name','id')->all();
        return view('admin.user.edit',compact('role','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
        $data = $request->except('avatar');
        if($request->hasFile('avatar')){
            $pathFile = Storage::putFile('users',$request->file('avatar'));
            $data['avatar']='storage/'.$pathFile;
        }
        $currentImage=$user->avatar;
        $user->update($data);

        if($request->hasFile('avatar') && $currentImage && file_exist(public_path($currentImage))){
            unlink(public_path($currentImage));
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        if($user->avatar && file_exists(public_path($user->avatar))){
            unlink(public_path($user->avatar));
        }
        return redirect()->route('users.index');
    }
}
