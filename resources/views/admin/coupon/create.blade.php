@extends('admin.adminlayout')
@section('layout-admin') 
ADD COUPON
    <form action="{{ route('coupon.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mt-3">
        <span class="form-label">Name :</span>
        <input type="text" name="name" class="form-control">
    </div>

    <div>
        <span class="form-label">Start Time :</span>
        <input type="date" name="start" class="form-control">
    </div>

    <div>
        <span class="form-label">End Time :</span>
        <input type="date" name="end" class="form-control">
    </div>

    <div class="mt-3">
        <span class="form-label">Limit :</span>
        <input type="number" name="limit" class="form-control">
    </div>

    <button type="submit" class="btn btn-success mt-3"> Add</button>

    </form>
@endsection