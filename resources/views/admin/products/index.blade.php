@extends('admin.adminlayout')
@section('layout-admin')

LIST PRODUCT
<br>
 <a href="{{route('products.create')}}" class="btn btn-success text-white ">CREATE</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>IMAGE</th>
            <th>PRICE</th>
            <th>DESCRIPTION</th>
            <th>CATEGORY</th>

        </tr>
    </thead>

    <tbody>
        @foreach($products as $item )
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>
                <img src="{{ asset($item->image) }}" width="100px" alt="">
            </td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->description }}</td>
             
            <td>{{ $item->category->name}}</td>
             
            
            <td>
                <a class="btn btn-primary" href="{{route('products.edit',$item)}}">EDIT</a>
                <form action="{{ route('products.destroy',$item)  }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger" type="submit">DELETE</button>
                </form>
                
        </td>
        </tr>
    </tbody>
        @endforeach
</table>
@endsection