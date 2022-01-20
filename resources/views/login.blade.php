@extends('layout.main')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="ml-5 mr-5 mt-2 p-5">
    <form action='login/login' method='post'>
        @csrf
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <input id="email" name="email" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-4 col-form-label">Password</label>
            <div class="col-8">
                <input id="password" name="password" type="password" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>
    
    @if(session()->has('message'))
    <div class="alert alert-danger m-3">
        {{ session()->get('message') }}
    </div>
    @endif

</div>


@endsection