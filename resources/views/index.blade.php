@extends('layouts.app')
@section('content')
    <main class="container max-w-custom mx-auto pt-36 sm:pt-36 md:pt-44 flex flex-col sm:flex-col md:flex-row items-center">
        <div class="mt-12 md:mt-20 md:w-2/3">
            <img src="https://res.cloudinary.com/dkerurdbc/image/upload/v1630416964/1630409714420_q8dyi6.jpg"
                 class="w-full h-96">
        </div>
        <div class="md:w-1/3 pl-12 md:pl-4 pt-12 md:ml-12 mt-12 md:mt-0">
            <div class="myCountdown flex" data-date="2021-09-27 12:00:01">
                <div><span class="counter-days text-6xl text-red-600 font-extrabold"></span> Days</div>
                <div class="ml-3"><span class="counter-hours text-5xl text-gray-600 font-extrabold"></span> Hours</div>
                <div class="ml-3"><span class="counter-minutes text-4xl text-red-300 font-extrabold"></span> Minutes</div>
                <div class="ml-3"><span class="counter-seconds text-4xl text-red-600 font-extrabold"></span> Seconds</div>
            </div>
            <div class="tracking-wider text-3xl font-extrabold mt-8">Remaining for Registration and submission</div>
        </div>
    </main>
    <div class="container max-w-custom mx-auto pt-28 sm:pt-24 md:pt-24 flex flex-col sm:flex-col md:flex-row justify-center items-center space-x-20">
        <button type="submit" class="hover:bg-blue-400 justify-center md:w-1/6 h-12 text-lg bg-blue-600 text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 md:mt-20">
            <a href="{{route('register.index')}}" class="hover:text-white">
            <span class="ml-1">Register Now</span>
            </a>
        </button>
        <div class="container max-w-custom mx-auto mt-4 md:mt-1 md:w-1/3">
            <div class="tracking-wide text-gray-500 font-bold text-2xl">Participants</div>
            <div id="slideshow" class="relative">
                @foreach($participants as $participant)
                    <div style="position:absolute;" class="md:w-1/2 bg-red-400 font-bold tracking-wide text-white px-8 py-4 rounded-full">
                        {{$participant->name}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="mt-24 w-full h-8 bg-black text-white text-center flex items-center justify-center space-x-4">
       <div>©</div>
        <a href="" style="text-decoration: none">learnwithcomics.org</a> &nbsp;. All Right Reserved
    </div>
@endsection
