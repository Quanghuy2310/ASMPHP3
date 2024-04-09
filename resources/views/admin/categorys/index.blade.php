@extends('admin.adminlayout')
@section('layout-admin')
LIST CATEGORY
<br>
<a href="{{route('categorys.create')}}" class="btn btn-success text-white ">CREATE</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>


        </tr>
    </thead>

    <tbody>
        @foreach($categorys as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>
                <a class="btn btn-primary" href="{{route('categorys.edit',$item)}}">EDIT</a>
                <form action="{{ route('categorys.destroy',$item)  }}" method="POST">
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