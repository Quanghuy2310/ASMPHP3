@extends('admin.adminlayout')
@section('layout-admin')
 ADD PRODUCT
 <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mt-3">
        <span class="form-label">Name :</span>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="mt-3">
        <span class="form-label">Image :</span>
        <input type="file" name="image" class="form-control">
    </div>

    <div class="mt-3">
        <span class="form-label">Price :</span>
        <input type="text" name="price" class="form-control">
    </div>

    <div class="mt-3">
        <span class="form-label">Description :</span>
        <input type="text" name="description" class="form-control">
    </div>

    <div class="mt-3">
        <span class="form-label">Category :</span>
        <select name="category_id" id="">
            @foreach ($category as $item)
                
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success mt-3"> Add</button>
</form>
@endsection