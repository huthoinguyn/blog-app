<!-- Sidebar Section -->
<aside class="w-full md:w-1/3 flex flex-col items-center px-3">

    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <h3 class="text-xl font-semibold mb-3">
            All Categories
        </h3>
        @foreach($categories as $cat)
            <a href="{{route('by-category', $cat)}}" class="text-semibold capitalize block py-2 px-3 rounded">
                {{ $cat->title }}({{ $cat->total }})
            </a>
        @endforeach
    </div>

    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <p class="text-xl font-semibold pb-5">
            {{ \App\Models\TextWidget::getTitle('about-us-sidebar') }}
        </p>
        {!! \App\Models\TextWidget::getContent('about-us-sidebar') !!}
        <a href="#"
           class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
            Get to know us
        </a>
    </div>

</aside>