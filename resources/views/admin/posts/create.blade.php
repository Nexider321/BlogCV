<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin panel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("") }}

                    <form action="/dashboard" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Post Name</label>
                            <input type="text" class="form-control" id="inputName" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="inputDescription" class="form-label">Post Content</label>
                            <textarea type="text" class="form-control" id="inputDescription" name="body"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category </label>
                            <select name="category_id" id="inputCategory" required>
                                @foreach(\App\Models\Category::all() as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? ' selected' : '' }}>
                                        {{ ucwords($category->name) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputPublish" class="form-label">Publish</label>
                        <select name="publish" id="inputPublish">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                            <div>
{{--                        <div class="mb-3">--}}
{{--                            <label for="inputCategory_id" class="form-label">Publish</label>--}}
{{--                            <input type="text" class="form-control" id="inputCategory" name="publish">--}}
{{--                        </div>--}}
                        <div class="mb-3">
                            <label for="inputCategory_id" class="form-label">Image</label>
                            <input type="file" class="form-control" id="inputCategory" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary text-black">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
