@extends('layouts.main')
@section('title', 'Comics')
@section('content')
<div id="comics" class="container row justify-center">
    <div class="col-8">    
        <h3>ACTION COMICS #1000: THE DELUXE EDITION </h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque sint iste corporis porro? Debitis molestias placeat voluptas, possimus recusandae exercitationem, libero aliquid inventore laborum a quo dignissimos explicabo voluptatibus vitae, eaque modi beatae velit minima. Praesentium aspernatur impedit, repudiandae hic modi, eligendi dolore numquam, aut quae non placeat esse neque.</p>
    </div>
    <figure class="col-4">
        <figcaption>ADVERTISEMENT</figcaption>
        <img src="{{asset('images/adv.jpg')}}" alt="adv">
    </figure>
</div>
@endsection
