@extends('admin.adminlayout')
@section('layout-admin')
EDIT PRODUCT
<form action="{{route('products.update',$product)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    

    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$product->name}}">
      </div>

      <div class="mb-3 mt-3">
        <label for="price" class="form-label">Price:</label>
        <input type="text" class="form-control" id="price" placeholder="Enter price" name="sku" value="{{$product->price}}">
      </div>

      <div class="mb-3 mt-3">
        <label for="image" class="form-label">Image:</label>
        <input type="file" class="form-control" id="image" placeholder="Enter image" name="image" >
        <img src="{{asset($product->image)}}" alt="" width="100px" >
      </div>

      <div class="mb-3 mt-3">
        <label for="description" class="form-label">Description:</label>
        <textarea class="form-control" id="description"  name="description">
            {{$product->description}}
        </textarea>
      </div>

      <div class="mb-3 mt-3">
        <label for="category_id" class="form-label">Category:</label>
        <select class="form-select" id="category_id" name="category_id">
            @foreach ($category as $id=> $name )
                    <option @if($product->category_id == $id) selectetd @endif 
                        value="{{$id}}">{{$name}}</option>
            @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-primary">EDIT</button>
      <a class="btn btn-danger " href="{{route('products.index')}}">BACK </a>
     
</form>
@endsection