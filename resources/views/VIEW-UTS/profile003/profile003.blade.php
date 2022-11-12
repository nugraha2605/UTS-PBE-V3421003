@extends('layouts.uts')

@section('content')

<!-- Profile Image -->
<div class="card card-primary card-outline">
    <div class="card-body box-profile">
        @if(session()->has('updated'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('updated') }}
        </div>
        @endif
        <div class="text-center">
        <img class="profile-user-img img-fluid img-circle"
        src="CSS/dist/img/user4-128x128.jpg"
        alt="User profile picture">

        <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>

        <a href="/validation003/{{ $post->id }}/edit" class="btn btn-primary center-block" data-feather="edit">Update Profil</a>

        </div>
    <br>
    <div class="tab-pane">
        <div class="form-horizontal">
    @foreach ($post as $post)
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <p class="form-control">{{ $post->alamat }}</p>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Kota Kelahiran</label>
        <div class="col-sm-10">
          <p class="form-control">{{ $post->kota_lahir }}</p>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
          <p class="form-control">{{ $post->tanggal_lahir }}</p>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Umur</label>
        <div class="col-sm-10">
          <p class="form-control">{{ $post->umur }}</p>
        </div>
    </div>
    @endforeach

        </div>
    </div>
    </div>
</div>


@endsection
