<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach($courses as $course)
        <div class="bg-white shadow-bg rouded-lg px-4 py-6 text-center">
            <a href="{{route('course', $course->slug)}}">
                <img src="{{$course->image}}" class="rounded-md mb-2" alt="">
                <h2 class="text-lg text-gray-600 truncate uppercase">{{ $course->name }}</h2>
                <h3 class="text-md text-gray-500">{{ $course->excert }} </h3>
                <img src="{{$course->user->avatar}}" class="rounded-full mx-auto mt-4 h-16 w-16" alt="">
            </a>
        </div>
    @endforeach
</div>
