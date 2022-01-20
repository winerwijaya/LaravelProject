@extends('layout.userlay')

@section('logout')
<div class="btn-toolbar">
    <a class="btn btn-primary me-2" href="/logout" role="button">Logout</a>
</div>
@endsection


@section('content')

<div class="d-flex justify-content-evenly flex-wrap mt-5">

    @foreach($user as $u)

    <div class="card" style="width: 18rem;">
        <img src="{{ Storage::url($u->image) }}" class="card-img-top" alt="">
        <div class="card-body">
            <p class="card-title">{{ '@'.$u->username }}</p>
            <p class="card-text">{{ $u->name }}</p>
            <p class="card-text">Phone: {{ '+'.$u->phone }}</p>
            <p class="card-text">Age: {{ $u->age }}</p>
        </div>
    </div>
    @endforeach

</div>



@endsection