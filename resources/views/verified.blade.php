@extends('layouts.layout')
@section('content')
    <div class="w-3/4 mx-auto relative" style="height: 500px">
        <div class="absolute top-2/4 left-2/4">
            <h2 class="text-center font-bold " style="transform: translate(-50%, -50%)"> You application has been verified and your exam has been scheduled for {{ $exam->date }} </h2>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a href="route('logout')" class="inline-flex text-white bg-pink-500 border-0 py-2 px-6 focus:outline-none hover:bg-pink-600 rounded text-lg"
                   onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Log out') }}
                </a>
            </form>
        </div>

    </div>
@endsection
