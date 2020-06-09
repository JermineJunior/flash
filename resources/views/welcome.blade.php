@extends('layouts.app')

@section('content')
<div class="block md:flex md:items center bg-gray-200 min-h-screen bg-cover">
    <div class="w-full md:w-1/2 pt-24">
        <div class=" text-gray-800 px-6 tracking-wide">
            <h1 class="lg:text-4xl sm:text-lg my-4 italic">Welcome to My <i class="text-orange-500">Ecommerce</i> website , have fun.</h1>
            <a class="text-xl inline-block no-underline  leading-relaxed" href="#">Browse All Books.</a>
        </div>
    </div>
    <div class="w-full md:w-1/2 pt-4">
      <img src="{{ asset('images/shop.svg') }}" alt="" class="w-full" >    
    </div>
</div>
@endsection
