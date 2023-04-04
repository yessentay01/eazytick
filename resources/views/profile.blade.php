@extends('layouts.main')

@section('content')
    <style>
        .profile{
            padding: 220px 0 80px;
        }
        .ticket{
            border: 1px solid #f5f5f5;
            padding: 20px 20px;
            margin: 20px 0;
        }
    </style>
    <div class="container profile">
        <h2 style="text-align: center">Profile Page</h2>
        <br>
        <br>
        <h4>Fullname: {{ Auth::user()->name}}</h4>
        <br>
        <h4>Email: {{ Auth::user()->email}}</h4>
        <br>
{{--        <form action="{{route('profile.store')}}" method="post">--}}
{{--            @csrf--}}
{{--            <div class="form-group">--}}
{{--                <h4>Interest</h4>--}}
{{--                <input type="text" name="interest" class="form-control" value="{{$information[0]->interest}}" required>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <h4>About me</h4>--}}
{{--                <input type="text" name="about" class="form-control"  value="{{$information[0]->about}}" required>--}}
{{--            </div>--}}
{{--            <input type="text" style="display: none" name="user_id" value="{{Auth::user()->id}}">--}}
{{--            <button style="background-color: #007bff; color: #fff" type="submit" class="btn btn-primary">Save information</button>--}}
{{--        </form>--}}
        <br>
        <br>
        <h4>My tickets:</h4>
        @foreach($tickets as $ticket)
            <div class="ticket">
                <h5>{{$ticket->event}}</h5>
                <p>Ряд: {{$ticket->row}}</p>
                <p>Место: {{$ticket->place}}</p>
                <p>Цена: {{$ticket->price}}</p>
                <br>
                <a target="_blank" href="{{route('ticketPDF', $ticket->id)}}" class="btn btn-warning">Скачать билет</a>
            </div>
        @endforeach
        <br>
        <h4>My comments:</h4>
        <br>
        <hr>
        @foreach($comments as $comment)
            <div style="padding: 10px 0">
            <p>name: {{$comment->name}}</p>
            <p>email: {{$comment->email}}</p>
            <p>phone: {{$comment->phone}}</p>
            <p>message: {{$comment->message}}</p>
            @foreach($posts as $post)
                @if($post->id == $comment->post_id)

                    <p>Post: {{$post->name}}</p>
                @endif
            @endforeach
            </div>
            <hr>

        @endforeach
        <br>
        <br>
    </div>
@endsection
