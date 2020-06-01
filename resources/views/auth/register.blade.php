@extends('layouts.app')

@section('content')
<div class="register">
    <div class="flex items-center justify-center mt-2">
        <svg fill="none" viewBox="0 0 24 24" class="w-10 h-10 block text-orange-600" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
        </svg>
    </div>
    <h2 class=" text-center text-xl font-bold">
        Register a new account
    </h2>
    <div class="text-center pb-px">
        <p class="w-full text-xs text-center text-gray-700 mt-2">
            {{ __('Already have an account?') }}
            <a class="text-orange-500 hover:text-orange-700 no-underline" href="{{ route('login') }}">
                {{ __('Login') }}
            </a>
        </p>
        <div class='flex justify-center my-2 mx-4'>
            <form class='w-full max-w-xl bg-white rounded-lg p-6' method="POST" action="{{ route('register') }}">
                @csrf
                <div class='flex flex-wrap -mx-3 mb-6'>
                    <div class='w-full md:w-1/2 px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2 text-left' for='grid-text-1'>Name</label>
                        <input class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500' id='grid-text-1' name="name" type='text' placeholder='Enter Name'  required>
                    </div>
                    <div class='w-full md:w-1/2 px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2 text-left' for='grid-Password-2'>Email Address</label>
                        <input class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500' id='grid-email-2' type='email' name="email" placeholder='Enter Email Address'  required>
                    </div>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2 text-left' for='grid-Password-3'>Password</label>
                        <input class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500' id='grid-password-3' type='password' name="password" placeholder='*******'  required>
                    </div>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2 text-left' for='grid-Password-4'> Confirm Password </label>
                        <input class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500' id='grid-password-4' type='password'  name="password_confirmation" placeholder='*******'  required>
                    </div>
                    <div class="flex flex-wrap px-4 w-full">
                        <button type="submit" class="inline-block w-full text-center align-middle text-center select-none border font-bold whitespace-no-wrap py-2 px-4 rounded text-base leading-normal no-underline text-gray-100 bg-orange-500 hover:bg-orange-700">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div> 
    </div>
    @endsection
    