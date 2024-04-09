@extends('admin.adminlayout')
@section('layout-admin')

LIST ROLE
<br>
 <a href="{{route('roles.create')}}" class="btn btn-success text-white ">CREATE</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
        </tr>
    </thead>

    <tbody>
        @foreach($role as $item )
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            
            <td>
                <a class="btn btn-primary" href="{{route('roles.edit',$item)}}">EDIT</a>
                <form action="{{ route('roles.destroy',$item)  }}" method="POST">
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