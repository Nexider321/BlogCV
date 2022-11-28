<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin panel') }}
        </h2>

    </x-slot>

    @foreach($posts as $post)
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                        {{ $post->title, }} <br>
                         Category: "{{$post->category->name}}" <br>
                    @foreach($post->tags as $tag)
                        {{$tag->name}}
                    @endforeach
                    <br>
{{--                    @foreach($tags as $tag)--}}
{{--                        Tags:  "{{$tag->name}}" <br>--}}
{{--                    @endforeach--}}

                        Content: {{ Str::limit($post->body, 50, '...') }} <br>
                        Is Published: {{ $post->is_published }} <br>

                    <a href="/edit/{{$post->id}}" class="">EDIT</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
