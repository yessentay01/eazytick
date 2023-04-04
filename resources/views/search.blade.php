@extends('layouts.main')

@section('content')

<section class="breadcrumb-area">
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-area-content">
                    <h1>Поиск друзей</h1>
                </div>
            </div>
        </div>
    </div>
</section><!-- breadcrumb area end -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5">
                <div style="text-align: center" class="hero-area-content">
                    <img width="400" src="{{asset($item->images)}}" alt="about" />
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="hero-area-content pr-50">
                    <h2>{{$item->name}}</h2>
                    <div class="review">
                        <div class="author-review">
                            <i class="icofont icofont-star"></i>
                            <i class="icofont icofont-star"></i>
                            <i class="icofont icofont-star"></i>
                            <i class="icofont icofont-star"></i>
                            <i class="icofont icofont-star"></i>
                        </div>
                        <h4>180k voters</h4>
                    </div>
                    <p>{{$item->description}}</p>
                        <br>
                        <br>

                        <a href="{{route('tickets', $item)}}" class="btn btn-success">Купить билет</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="details-content">
                    <div class="details-reply">
                        <h2>Оставить сообщение</h2>
                        <form action="{{ route('search.store', 1) }}" method="POST" >
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="select-container">
                                        <input name="name" value="{{Auth::user()->name}}" type="text" placeholder="Name"/>
                                        <i class="icofont icofont-ui-user"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="select-container">
                                        <input name="email" value="{{ Auth::user()->email }}" type="text" placeholder="Email"/>
                                        <i class="icofont icofont-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="select-container">
                                        <input name="phone" type="text" placeholder="Phone"/>
                                        <i class="icofont icofont-phone"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="textarea-container">
                                        <textarea name="message" placeholder="Type Here Message"></textarea>
                                        <button><i class="icofont icofont-send-mail"></i></button>
                                    </div>
                                </div>
                            </div>
                            <input style="display: none" type="text" name="post_id" value="{{$item->id}}">
                            <div class="details-comment">
                                <button type="submit" class="theme-btn theme-btn2" href="#">Post Comment</button>
                            </div>
                        </form>
                    </div>

                </div>
                @foreach($messages as $message)
                    @if($message->post_id == $item->id)
                    <div style="font-size: 18px">
                        <a href="{{route('userprofile', $message->email)}}">{{$message->name}}</a>: {{$message->message}}
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>

@endsection
