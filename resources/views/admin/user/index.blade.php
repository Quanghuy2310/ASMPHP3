@extends('admin.adminlayout')
@section('layout-admin')

LIST USER
<br>
 <a href="{{route('users.create')}}" class="btn btn-success text-white ">CREATE</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>AVATAR</th>
            <th>GMAIL</th>
            <th>PHONE</th>
            <th>ROLE</th>
            <th>PASSWORD</th>

        </tr>
    </thead>

    <tbody>
        @foreach($user as $item )
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>
                <img src="{{ asset($item->avatar) }}" width="100px" alt="">
            </td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td>@if($item->role==1)
            <span>Admin</span>
            @else
            <span>Customer</span>
            @endif
        </td>
            <td>{{ $item->password }}</td>

            
             
            
            <td>
                <a class="btn btn-primary" href="{{route('users.edit',$item)}}">EDIT</a>
                <form action="{{ route('users.destroy',$item)  }}" method="POST">
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