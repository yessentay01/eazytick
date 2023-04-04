@extends('layouts.main')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<section class="blog-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title pb-20">
                    <h1><i class="icofont icofont-coffee-cup"></i> Latest News</h1>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-lg-12">
                @foreach($news as $new)
                <div class="single-news">
                    <div class="news-bg-1" style="background: url({{$new->img}}) no-repeat center / cover;"></div>
                    <div class="news-date">
                        <h2>{{$new->date}}</h2>
                    </div>
                    <div class="news-content">
                        <h2>{{$new->title}}</h2>
                        <p>{{$new->subtitle}}</p>
                    </div>
                    <a href="#">Read More</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
    <br>
    <br>
    <br>
    <br>

@endsection
