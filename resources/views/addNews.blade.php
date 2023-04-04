@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add news</h2>
        <hr>
        <form class="col-6" action="{{route('newsStore')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <br>
            <div class="form-group">
                <label for="Subtitle">Subtitle</label>
                <input type="text" class="form-control" id="Subtitle" name="subtitle" required>
            </div>
            <br>
            <div class="form-group">
                <label for="img">Img URL</label>
                <input type="text" class="form-control" id="img" name="img" required>
            </div>
            <br>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" class="form-control" id="date" name="date" required>
            </div>
            <br>
            <div class="form-group">
                <label for="Text">Text</label>
                <textarea class="form-control" name="text" id="text" cols="30" rows="10" required></textarea>
            </div>
            <br>
            <button class="btn btn-primary" type="submit" >Submit</button>
        </form>
    </div>
@endsection
