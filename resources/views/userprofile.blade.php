@extends('layouts.main')

@section('content')
    <style>
        .profile{
            padding: 220px 0 80px;
        }
    </style>
    <div class="container profile">
        <h2>{{$userinfo[0]->name}}</h2>
        <br>
        <h5>Email: {{$userinfo[0]->email}}</h5>

        <br>
        <a target="_blank" class="btn btn-primary" href="mailto:{{$userinfo[0]->email}}">Написать</a>
        <br>
        <br>
        <br>
        <br>
    </div>
@endsection
