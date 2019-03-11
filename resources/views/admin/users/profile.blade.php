@extends('layouts.app')

@section('content')
    @include('admin.includes.errors')
    <div class="card">
        <div class="card-header">
            Your profile <span class="float-right"><a href="{{ route('profile.edit',['id'=>Auth::user()->id]) }}">Edit Profile</a> </span>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-img text-center"><img src="{{ asset(Auth::user()->profile->avatar) }}" height="100px" width="100px"></div>
                <ul class="list-group">
                    <li class="list-group-item">Name: {{ Auth::user()->name }}</li>
                    <li class="list-group-item">Email: {{ Auth::user()->email }}</li>
                    <li class="list-group-item"><a href="{{ Auth::user()->profile->facebook }}">Facebook</a> </li>
                    <li class="list-group-item"><a href="{{ Auth::user()->profile->youtube }}">YouTube</a> </li>
                    <li class="list-group-item">About:<hr width="50%" align="center">{{ Auth::user()->profile->about }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection