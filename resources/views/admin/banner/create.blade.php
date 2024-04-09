@extends('admin.adminlayout')
@section('layout-admin') 
ADD BANNER
    <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mt-3">
        <span class="form-label">Image :</span>
        <input type="file" name="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-success mt-3"> Add</button>

    </form>
@endsection