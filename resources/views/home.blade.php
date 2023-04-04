@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <h2>Events</h2>
            <table id="adminTable" style="width: 100%">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Images</th>
                    <td></td>
                </tr>
                @foreach($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->images}}</td>
                        <td>
                            <form action="route{{'deleteEvent'}}" method="post">
                                @csrf
                                <input type="text"  name="id" value="{{$item->id}}" style="display: none">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <th><b>Итого</b></th>
                    <th colspan="4"><b>{{count($items)}}</b></th>
                </tr>
            </table>
            <br>
            <br>
                <h2>Users</h2>
                <table id="adminTable">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @if($user->id != 8)
                                    <form action="{{route('user.delete')}}" method="post">
                                        @csrf
                                        <input style="display: none" type="text" name="id" value="{{$user->id}}">
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <th><b>Итого</b></th>
                        <th colspan="2"><b>{{count($users)}}</b></th>

                    </tr>
                </table>
            <br>
            <br>
                <h2>Comments</h2>
            <table id="adminTable">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Message</th>
                    <th>Post_ID</th>
                    <th></th>
                </tr>
                @foreach($messages as $message)
                    <tr>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->phone}}</td>
                        <td>{{$message->message}}</td>
                        <td>{{$message->post_id}}</td>
                        <td>
                            <form action="{{route('deleteComment')}}" method="post">
                                @csrf
                                <input type="text" name="id" value="{{$message->id}}" style="display: none">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <th ><b>Итого</b></th>
                    <th colspan="5" ><b>{{count($messages)}}</b></th>
                </tr>
            </table>
            <br>
            <br>
            <h2>Tickets</h2>
            <table id="adminTable">
                <tr>
                    <th>Event</th>
                    <th>Sector</th>
                    <th>Row</th>
                    <th>Place</th>
                    <th>Price</th>
                    <th>Fullname</th>
                    <th></th>
                </tr>
                @foreach($tickets as $ticket)
                    <tr>
                        <td>{{$ticket->event}}</td>
                        <td>{{$ticket->sector}}</td>
                        <td>{{$ticket->row}}</td>
                        <td>{{$ticket->place}}</td>
                        <td>{{$ticket->price}}</td>
                        <td>{{$ticket->fullname}}</td>
                        <td>
                            <form action="{{route('deleteTicket')}}" method="post">
                                @csrf
                                <input type="text"  name="id" value="{{$ticket->id}}" style="display: none">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <th ><b>Итого</b></th>
                    <th colspan="6" ><b>{{count($tickets)}}</b></th>
                </tr>
            </table>
            <br>
            <br>
            <h2>News</h2>
            <table id="adminTable">
                <tr>
                    <th>title</th>
                    <th>subtitle</th>
                    <th>text</th>
                    <th>img</th>
                    <th>date</th>
                    <th></th>
                </tr>
                @foreach($news as $new)
                    <tr>
                        <td>{{$new->title}}</td>
                        <td>{{$new->subtitle}}</td>
                        <td>{{$new->text}}</td>
                        <td>{{$new->img}}</td>
                        <td>{{$new->date}}</td>
                        <td>
                            <form action="{{route('deleteNew')}}" method="post">
                                @csrf
                                <input type="text"  name="id" value="{{$new->id}}" style="display: none">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <th><a class="btn btn-primary" href="{{route('addnew')}}">Add news</a></th>
                    <th ><b>Итого</b></th>
                    <th colspan="4" ><b>{{count($news)}}</b></th>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
