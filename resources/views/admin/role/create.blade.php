@extends('admin.adminlayout')
@section('layout-admin') 
ADD ROLE
    <form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mt-3">
        <span class="form-label">Name :</span>
        <input type="text" name="name" class="form-control">
    </div>

    <button type="submit" class="btn btn-success mt-3"> Add</button>

    </form>
@endsection