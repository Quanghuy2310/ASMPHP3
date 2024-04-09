@extends('admin.adminlayout')
@section('layout-admin')
 ADD USER
 <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mt-3">
        <span class="form-label">NAME :</span>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="mt-3">
        <span class="form-label">AVATAR :</span>
        <input type="file" name="avatar" class="form-control">
    </div>

    <div class="mt-3">
        <span class="form-label">EMAIL :</span>
        <input type="mail" name="email" class="form-control">
    </div>

    <div class="mt-3">
        <span class="form-label">PHONE :</span>
        <input type="text" name="phone" class="form-control">
    </div>

    <div class="mt-3">
        <span class="form-label">ROLE :</span>
        <select name="role" id="">
            @foreach ($role as $item)
                
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mt-3">
        <span class="form-label">PASSWORD :</span>
        <input type="text" name="password" class="form-control">
    </div>

    <button type="submit" class="btn btn-success mt-3"> Add</button>
</form>
@endsection