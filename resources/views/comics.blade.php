@extends('layouts.main')
@section('title', 'Home')
@section('content')
<div id="content">
    <div class="container">
        <div class="btn dc-background font-white">CURRENT SERIES</div>
        <div class="row">
            @foreach($comics as $item)
                <figure id="card">
                    <img src="{{$item['thumb']}}" alt="{{$item['title']}}"> 
                    <figcaption><a href="{{route('show', ['id'=> $loop->index])}}">{{ $item['title'] }} </a></figcaption>
                </figure>
            @endforeach
            <div class="btn dc-background font-white pointer">LOAD MORE</div>
        </div>
      </div>
  </div>
@endsection
