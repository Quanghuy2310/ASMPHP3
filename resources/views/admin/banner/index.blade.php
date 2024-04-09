@extends('admin.adminlayout')
@section('layout-admin')

LIST BANNER
<br>
 <a href="{{route('banner.create')}}" class="btn btn-success text-white ">CREATE</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>IMAGE</th>

        </tr>
    </thead>

    <tbody>
        @foreach($banner as $item )
        <tr>
            <td>{{ $item->id }}</td>
            <td>
                <img src="{{ asset($item->avatar) }}" width="100px" alt="">
            </td>
        </td>
              
            <td>
                <form action="{{ route('banner.destroy',$item)  }}" method="POST">
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