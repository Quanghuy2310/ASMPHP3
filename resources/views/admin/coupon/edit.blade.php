@extends('admin.adminlayout')
@section('layout-admin') 
EDIT COUPON
    <form action="{{ route('coupon.update',$coupon) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mt-3">
        <span class="form-label">Name :</span>
        <input type="text" name="name" class="form-control" value="{{ $coupon->name }}">
    </div>

    <div>
        <span class="form-label">Start Time :</span>
        <input type="date" name="start" class="form-control" value="{{ $coupon->start }}">
    </div>

    <div>
        <span class="form-label">End Time :</span>
        <input type="date" name="end" class="form-control" value="{{ $coupon->end }}">
    </div>

    <div class="mt-3">
        <span class="form-label">Limit :</span>
        <input type="number" name="limit" class="form-control" value="{{ $coupon->limit }}">
    </div>

    <button type="submit" class="btn btn-success mt-3"> Add</button>

    </form>
@endsection