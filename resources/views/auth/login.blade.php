{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



 @extends('layouts.app')

 @section('title', 'Login')

 @section('front_content')
 
 
        <!-- Inner Banner -->
        <div class="inner-banner">
          <div class="container">
              <div class="inner-title text-center">
                  <h3>Log In</h3>
                  <ul>
                      <li>
                          <a href="index.html">Home</a>
                      </li>
                      <li>
                          <i class='bx bx-chevrons-right'></i>
                      </li>
                      <li>Log In</li>
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
                              <h2>Log In</h2>
                              <form method="POST" action="{{ route('login') }}">
                                @csrf
                                  <div class="row">
                                      <div class="col-lg-12 ">
                                          <div class="form-group">
                                              <input type="text" class="form-control"   name="email" value="{{ old('email') }}" required data-error="Please enter your Username or Email" placeholder="Username or Email">
                                          </div>
                                          @error('email')
                                          <span class="error-message" style="color: red; font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                      </div>
  
                                      <div class="col-12">
                                          <div class="form-group">
                                              <input class="form-control" type="password" name="password" placeholder="Password">
                                          </div>
                                          @error('password')
                                          <span class="error-message" style="color: red; font-size: 12px;">{{ $message }}</span>
                                        @enderror
                                      </div>
  
                                      {{-- <div class="col-lg-12 form-condition">
                                          <div class="agree-label">
                                              <input type="checkbox" id="chb1">
                                              <label for="chb1">
                                                  Remember Me <a class="forget" href="forget-password.html">Forgot My Password?</a>
                                              </label>
                                          </div>
                                      </div> --}}
                                         <!-- Remember Me & Forgot Password -->
              <div class="remember-forgot">
                            <label>
                       <input type="checkbox" name="remember" /> Remember me
                         </label>
                    @if (Route::has('password.request'))
                     <a href="{{ route('password.request') }}">Forgot password?</a>
                   @endif
                 </div>
  
                                      <div class="col-lg-12 ">
                                          <button type="submit" class="default-btn btn-bg-two">
                                              Log In Now
                                          </button>
                                      </div>

                                      <div class="col-12">
                                          <p class="account-desc">
                                              Not a Member?
                                              <a href="{{ route('register') }}">Register Now</a>
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