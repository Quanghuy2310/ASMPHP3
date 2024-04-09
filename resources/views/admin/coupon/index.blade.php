@extends('admin.adminlayout')
@section('layout-admin')
LIST COUPON
<br>
<a href="{{route('coupon.create')}}" class="btn btn-success text-white ">CREATE</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>START</th>
            <th>END</th>
            <th>LIMIT</th>



        </tr>
    </thead>

    <tbody>
        @foreach($coupon as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->start }}</td>
            <td>{{ $item->end }}</td>
            <td>{{ $item->limit }}</td>
            
            <td>
                <a class="btn btn-primary" href="{{route('coupon.edit',$item)}}">EDIT</a>
                <form action="{{ route('coupon.destroy',$item)  }}" method="POST">
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