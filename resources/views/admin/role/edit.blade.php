@extends('admin.adminlayout')
@section('layout-admin') 
EDIT ROLE
    <form action="{{ route('roles.update', $role) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mt-3">
        <span class="form-label">Name :</span>
        <input type="text" name="name" class="form-control" value="{{ $role->name }}">
    </div>

    <button type="submit" class="btn btn-success mt-3"> EDIT</button>

    </form>
@endsection