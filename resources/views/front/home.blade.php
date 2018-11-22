@extends('layouts.main')
@section('content')

     
        <section class="hero text-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <h2 >
                <strong>
                   Welcome To Easy Shop 
                </strong>
            </h2>
            <br>
            <a href="{{route('shirts')}}"><button class="button large">Check out My Fruits</button></a>
        </section>
        <br/>
        <div class="subheader text-center">
             <h2>
            Lohi Fresh Fruits
        </h2>
        </div>
       
        <!-- Latest SHirts -->
<div class="row">
        @forelse($shirts->chunk(4) as $chunk)
        @foreach($chunk as $shirt)
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="{{route('cart.addItem', $shirt->id)}}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                           <a href="{{route('shirt')}}">
                            <img src= "{{url ('images',$shirt->image)}}"/>
                             </a>
                    </div>
                   <a href="{{route('shirt')}}">
                        <h3>
                             {{$shirt->name}}
                        </h3>
                    </a>
                    <h5>
                       ${{$shirt->price}}
                    </h5>
                    <p>
                        {{$shirt->description}}
                    </p>
                </div>
            </div>
           
         @endforeach
         @empty
         <h4>No shirts</h4>

         @endforelse
        </div>
@endsection
