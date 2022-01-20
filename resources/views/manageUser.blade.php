@extends('layout.userlay')


@section('logout')
<div class="btn-toolbar">
    <a class="btn btn-primary me-2" href="/logout" role="button">Logout</a>
</div>
@endsection

@section('content')

<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">User ID</th>
            <th scope="col">Username</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($User as $u)
        <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->username}}</td>
            <td>
                <a class="btn btn-primary me-2" href="/deleteUser/{{$u->id}}" role="button">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection