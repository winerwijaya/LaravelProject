@extends('layout.userlay')

@section('logout')
<div class="btn-toolbar">
    <a class="btn btn-primary me-2" href="/logout" role="button">Logout</a>
</div>
@endsection

@section('content')

    <div style="height:50vh; width:200px; margin:0 auto" class="mt-5">
        <div><img width="150px" height="150px" src="{{ Storage::url(Auth::user()->image) }}" class= "mx-auto d-block image-responsive" alt=""></div>
        <div class="text-center">{{ '@'.Auth::user()->username }} </div>
        <div class="text-center"> {{ Auth::user()->name }}</div>
        <div class="text-center"> Phone: {{ '+'.Auth::user()->phone }}</div>
        <div class="text-center"> Age: {{ Auth::user()->age }}</div>
        <div class="text-center"> {{ Auth::user()->gender }}</div>
        @if(Auth::check() && Auth::User()->role == 'Customer')
        <div class="d-flex justify-content-center">
            <a class="btn btn-primary me-2" href="/editProfile" role="button">Edit Profile</a>
        </div>
        @endif
    </div>
    
@endsection