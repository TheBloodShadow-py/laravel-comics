@extends('layouts.default')

@section('main')
    <section class="relative">
        <img draggable="false" alt="hero-img" class=" bg-contain w-full absolute z-[-1]"
            src={{ Vite::asset('resources/img/jumbotron.jpg') }}>
    </section>
    <section class="bg-gray-900 w-full translate-y-[450px] py-20 pb-6">
        <div class=" my-0 mx-auto container">
            <div class="grid grid-cols-6 grid-rows-2 gap-x-10 gap-y-8 mb-12">
                @foreach ($books as $book)
                    <div class="flex text-white text-base flex-col gap-4">
                        <img class="h-[80%] drop-shadow bg-cover rounded" draggable="false" src={{ $book['thumb'] }}>
                        <h3 class="uppercase">{{ $book['title'] }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="flex justify-center">
            <button
                class="uppercase text-xs bg-blue-500 py-3 hover:bg-blue-600 transition-colors duration-300 px-14 rounded font-bold text-white">Load
                more</button>
        </div>
    </section>
@endsection
