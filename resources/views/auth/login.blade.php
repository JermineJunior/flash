@extends('layouts.app')

@section('content')
<div class="login mt-1">
    <h2 class=" text-center text-xl font-bold">
        Sign in to your account
    </h2>
    <div class="text-center pb-px">
        @if (Route::has('register'))
        <p class="w-full text-sm text-center text-gray-800 mt-2">
            or
            <a class="text-blue-500 hover:text-blue-800 no-underline" href="{{ route('register') }}">
                register a new account
            </a>
        </p>
        @endif
    </div>
    <div class='flex justify-center my-2'>
        <form class='w-full max-w-xl bg-white rounded-lg shadow-sm p-6' method="POST" action="{{ route('login') }}">
            @csrf
            <div class='flex flex-wrap -mx-3 mb-6'>
                <div class='w-full md:w-full px-3 mb-6'>
                    <label class='block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2' for='grid-Password-1'>email</label>
                    <input class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500' name="email" id='grid-email-1' type='email' placeholder='Enter email'  required>
                </div>
                @error('email')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
                <div class='w-full md:w-full px-3 mb-6'>
                    <label class='block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2' for='grid-Password-2'>password</label>
                    <input class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500' name="password" id='grid-password-2' type='password' placeholder='*******'  required>
                </div>
                @error('password')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
                <div class="flex items-center mb-8 px-4">
                    <label class="inline-flex w-1/2 mr-56 items-center text-sm text-gray-800" for="remember">
                        <input type="checkbox" name="remember" id="remember" class="form-checkbox bg-gray-100" {{ old('remember') ? 'checked' : '' }}>
                        <span class="ml-2">{{ __('Remember Me') }}</span>
                    </label>
                    <div class="w-1/2 right-0">
                        @if (Route::has('password.request'))
                        <a class="text-sm text-blue-500 hover:text-blue-800 whitespace-no-wrap no-underline" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </div>
                
                <div class="px-4 mt-4 w-full">
                    <button type="submit" class="bg-blue-500 w-full text-center hover:bg-blue-800 text-gray-100 font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endsection
    