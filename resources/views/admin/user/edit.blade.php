@extends('admin.adminlayout')
@section('layout-admin')
 EDIT USER
 <form action="{{ route('users.update',$user) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mt-3">
        <span class="form-label">NAME :</span>
        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
    </div>

    <div class="mt-3">
        <span class="form-label">AVATAR :</span>
        <input type="file" name="avatar" class="form-control">
        <img src="{{ asset($user->avatar) }}" width="100px" alt="">
    </div>

    <div class="mt-3">
        <span class="form-label">EMAIL :</span>
        <input type="mail" name="email" class="form-control" value="{{ $user->email }}">
    </div>

    <div class="mt-3">
        <span class="form-label">PHONE :</span>
        <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
    </div>

    <div class="mt-3">
        <span class="form-label">ROLE :</span>
        <select name="role" id="">
            @foreach ($role as $id=> $name )
                    <option @if($user->role == $id) selectetd @endif 
                        value="{{$id}}">{{$name}}</option>
            @endforeach
        </select>
    </div>

    <div class="mt-3">
        <span class="form-label">PASSWORD :</span>
        <input type="text" name="password" class="form-control" value="{{ $user->password }}">
    </div>

    <button type="submit" class="btn btn-success mt-3"> EDIT</button>
</form>
@endsection