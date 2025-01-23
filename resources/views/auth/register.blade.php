{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



@extends('layouts.app')

@section('title', 'register')

@section('front_content')
     
        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Register</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevrons-right'></i>
                        </li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
            <div class="inner-shape">
                <img src="{{ asset('/') }}frontend/assets/images/shape/inner-shape.png" alt="Images">
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- User Area -->
        <div class="user-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="user-img">
                            <img src="{{ asset('/') }}frontend/assets/images/user-img.jpg" alt="Images">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="user-form">
                            <div class="contact-form">
                                <h2>Register Now</h2>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <div class="form-group">
                                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" required data-error="Please enter your Username" placeholder="Enter Your Username">
                                            </div>
                                        </div>
    
                                        <div class="col-lg-12 ">
                                            <div class="form-group">
                                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" required data-error="Please enter your Username or Email" placeholder="Enter Your Email">
                                            </div>
                                        </div>
    
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control" type="password" name="password" placeholder="Password">
                                            </div>
                                        </div>
        
                                        <div class="col-lg-12 ">
                                            <button type="submit" class="default-btn btn-bg-two">
                                                Register Now
                                            </button>
                                        </div>

                                        <div class="col-12">
                                            <p class="account-desc">
                                                Already have an account? 
                                                <a href="{{ route('login') }}">Log In</a>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- User Area End -->
@endsection
