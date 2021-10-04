@extends('layouts.main')
@section('title', 'Comics')
@section('content')
<div id="comics" class="container row justify-center">
    <div class="col-8">    
        <h3>{{ $show['title'] }}</h3>
        <div class="info-banner row justify-between">
            <div>
                <span class="font-green-light px-1">US PRICE: </span><span>{{ $show['price'] }}</span>
            </div>
            <div>
                <span class="font-green-light px-1">AVAILABLE</span>
                <span class="px-1">Check availability</span>
            </div>
        </div>
        <p>{{ $show['description'] }}</p>
    </div>
    <figure class="col-4">
        <figcaption>ADVERTISEMENT</figcaption>
        <img src="{{asset('images/adv.jpg')}}" alt="adv">
    </figure>
</div>
@endsection
