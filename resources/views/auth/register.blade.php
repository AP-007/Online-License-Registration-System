@extends('layouts.layout')
@section('content')

    <div class="container flex justify-center my-7">
        <div class="wrapper">
            <div class="title">Registration Form</div>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="field">
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    <label> Name </label>
                </div>
                <div class="field">
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    <label> Email </label>
                </div>
                <div class="field">
                    <x-input id="password" class="block mt-1 w-full"
                             type="password"
                             name="password"
                             required autocomplete="current-password" />
                    <label> Password </label>
                </div>
                <div class="field">
                    <x-input id="password_confirmation" class="block mt-1 w-full"
                             type="password"
                             name="password_confirmation" required />
                    <label> Confirm Password </label>
                </div>
                <div class="field">
                    <x-button class="ml-3">
                        {{ __('Register Now') }}
                    </x-button>
                </div>
                <div class="signup-link">
                    Already a member? <a href="{{ route('login') }}">Login now</a>
                </div>
            </form>
        </div>
    </div>

@endsection


