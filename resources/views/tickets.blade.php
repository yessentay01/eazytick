@extends('layouts.main')

@section('content')
    <style>
        .first_element{
            padding-top: 200px;
            text-align: center;
            padding-bottom: 20px;
        }
        .box{
            background-color: #f5f5f5;
            padding: 20px 30px;
            margin-top: 20px;
            border-radius: 10px;
        }
        .buy input{
            background-color: #fff;
            border: 1px solid #24262d;
        }
        .btn-success{
            color: #fff !important;
            background-color: #28a745 !important;
            border-color: #28a745 !important;
            width: 200px !important;
        }
    </style>
    <div class="container first_element">
        <h2>Buying tickets</h2>
    </div>
    <form class="buy" action="{{ route('tickets.store', $item) }}" method="POST" >
        @csrf
        <div class="container box">
            <img src="https://barys-fans.org/wp-content/uploads/2019/08/Almaty_arena.jpg" alt="">

            <div class="form-group">
                <label for="event">Мероприятие</label>
                <input type="text" class="form-control" name="event" value="{{$item->name}}" readonly required>
            </div>
            <div class="form-group">
                <label for="event">Сектор</label>
                <input type="text" class="form-control" id="sector" name="sector" required>
            </div>
            <div class="form-group">
                <label for="event">Ряд</label>
                <input type="text" class="form-control" id="row" name="row" required>
            </div>
            <div class="form-group">
                <label for="event">Место</label>
                <input type="text" class="form-control" id="place" name="place" required>
            </div>
            <div class="form-group">
                <label for="event">Цена</label>
                <input type="text" class="form-control" name="price" value="15 000" id="price" readonly required>
            </div>

        </div>
        <div class="container box">
            <h2 style="color: #0b0b0b">Оплата</h2>
            <br>
            <div class="form-group">
                <label for="event">Card number</label>
                <input type="text" maxlength="16" class="form-control" id="cardnumber" name="cardnumber" required>
            </div>
            <div class="form-group">
                <label for="event">Fullname</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="event">Expiration date</label>
                <input type="month"  min="2022-12" value="2022-12" class="form-control" id="expiration" name="expiration" required>
            </div>
            <div class="form-group">
                <label for="event">CVV</label>
                <input type="text" maxlength="3" class="form-control" id="cvv" name="cvv" required>
            </div>
            <input type="text" style="display: none" class="form-control" value="{{Auth::user()->id}}" name="user_id" required>
            <input type="text" style="display: none"  class="form-control" value="{{$item->id}}" name="event_id" required>
        </div>
        <div class="container box">
            <button type="submit" class="btn btn-success">Buy</button>
        </div>
    </form>
    <br>
    <br>
    <br>
@endsection
