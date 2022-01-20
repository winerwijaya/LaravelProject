@extends('layout.userlay')

@section('logout')
<div class="btn-toolbar">
    <a class="btn btn-primary me-2" href="/user" role="button">Back</a>
</div>
@endsection

@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="ml-5 mr-5 mt-2 p-5">
    <form action="/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="validatedCustomFile" class="col-4 col-form-label">Foto Profil</label>
            <div class="col-8">
                <input type="file" id="image" name="image">
            </div>
            <div class="offset-4 col-8">
                @error('validatedCustomFile')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4 col-form-label" for="text">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" placeholder="{{Auth::user()->name}}">
            </div>
            <div class="offset-4 col-8">
                @error('nama')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenis_kelamin" id="jenis_kelamin" type="radio" class="custom-control-input" value="laki-laki">
                    <label for="jenis_kelamin" class="custom-control-label">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenis_kelamin" id="jenis_kelamin2" type="radio" class="custom-control-input" value="perempuan">
                    <label for="jenis_kelamin2" class="custom-control-label">Perempuan</label>
                </div>
            </div>
            <div class="offset-4 col-8">
                @error('jenis_kelamin')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="text1" class="col-4 col-form-label">Umur</label>
            <div class="col-8">
                <input id="umur" name="umur" type="number" class="form-control" placeholder="{{Auth::user()->age}}">
            </div>
            <div class="offset-4 col-8">
                @error('umur')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4 col-form-label" for="text">Phone</label>
            <div class="col-8">
                <input id="phone" name="phone" type="text" class="form-control" placeholder="{{Auth::user()->phone}}">
            </div>
            <div class="offset-4 col-8">
                @error('phone')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="text3" class="col-4 col-form-label">Password</label>
            <div class="col-8">
                <input id="password" name="password" type="password" class="form-control">
            </div>
            <div class="offset-4 col-8">
                @error('password')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Konfirmasi</button>
            </div>
        </div>
    </form>
    @if(session()->has('message'))
    <div class="alert alert-success m-3">
        {{ session()->get('message') }}
    </div>
    @endif
    
</div>




@endsection