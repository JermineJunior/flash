@extends('layouts.app')

@section('content')
<div class="block md:flex md:items center bg-gray-200 min-h-screen pt-12  bg-cover" style="background-image: url('/images/orange.jpg');">
    <div class="w-full md:w-1/2">
        <div class=" text-gray-100 px-6 tracking-wide">
            <h1 class="lg:text-4xl sm:text-lg my-4">Welcome to My Ecommerce website , have fun.</h1>
            <a class="text-xl inline-block no-underline  leading-relaxed" href="#">products</a>
        </div>
    </div>
    <section class="mt-4 md:mt-0 mx-4 md:mx-0 w-full md:w-1/2 ">
        <h2 class="text-white text-xl px-4">Recent Items</h2>
        <div class="max-w-xs bg-orange-400 shadow-lg rounded-lg overflow-hidden my-4">
            <div class="px-4 py-2">
                <h1 class="text-gray-900 font-bold text-3xl uppercase">NIKE AIR</h1>
                <p class="text-gray-100 text-sm mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
            </div>
            <img class="h-56 w-full object-cover mt-2" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="NIKE AIR">
            <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-orange-400 font-bold text-xl">$129</h1>
                <button class="px-3 py-1 bg-orange-400 text-sm text-gray-200 font-semibold rounded">Add to card</button>
            </div>
        </div>
    </section>
</div>
@endsection
