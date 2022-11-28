<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post: ' . $post->title) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("") }}

                    <form action="/dashboard/{{$post->id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Post Name</label>
                            <input type="text" class="form-control" id="inputName" name="title" value="{{$post->title}}">
                        </div>
                        <div class="mb-3">
                            <label for="inputDescription" class="form-label">Post Content</label>
                            <textarea type="text" class="form-control" id="inputDescription" name="body" >{{$post->body}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="inputCategory_id" class="form-label">Category id</label>
                            <input type="text" class="form-control" id="inputCategory" name="category" value="{{$post->category_id}}">
                        </div>
                        <div class="mb-3">
                            <label for="inputCategory_id" class="form-label">Publish</label>
                            <input type="text" class="form-control" id="inputCategory" name="publish"value="{{$post->is_published}}">
                        </div>
                        <div class="mb-3">
                            <label for="inputCategory_id" class="form-label">Image</label>
                            <input type="file" class="form-control" id="inputCategory" name="image"  accept=".jpg, .jpeg, .png" value="{{$post->image}}">
                        </div>
                        <button type="submit" class="btn btn-primary text-black">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
