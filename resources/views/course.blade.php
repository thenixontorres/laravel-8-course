@extends('layouts.web')

@section('content')

    
    <div class="text-center">
        <h1 class="text-3xl text-gray-700 mb-2 uppercase">Detalles del curso</h1>
    </div>
    <div class="grid grid-cols-3 gap-4">
        <div class="p-8 bg-gray-200 col-span-1">
            <ul class="flex flex-col">
                <li class="font-medium text-sm text-gray-400 uppercase mb-4">
                    Contenido
                </li>

                @foreach($course->posts as $post)
                    <li class="flex items-center text-gray-600 mt-2">
                        {{$post->name}}
                        @if($post->free)
                            <span class="text-xs text-gray-500 font-semibold bg-gray-300 px-2 rounded-full ml-auto">GRATIS</span>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="text-gray-700 col-span-2">
            <img src="{{$course->image}}" alt="">
            <h2 class="text-4xl">{{ $course->name }}</h2>
            <p>{{ $course->dscription }}</p>
            <div class="flex mt-3">
                <img src="{{$course->user->avatar}}" class="h-10 w-10 rounded-full mr-2" alt="">
                <div>
                    <p class="text-gray-500 text-sm uppercase">{{ $course->user->name }}</p>
                    <p class="text-gray-500 text-xs">{{ $course->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-20">
        <h1 class="text-3xl text-gray-700 mb-2 uppercase">Ultimos cursos</h1>
    </div>
    <livewire:course-list>
@endsection