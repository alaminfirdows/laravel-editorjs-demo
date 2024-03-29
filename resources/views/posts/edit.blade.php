<x-app-layout>
    <x-slot name="header">
        {{ __('Posts' )}}
    </x-slot>

    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 py-6">
        <form method="post" action="{{ route('posts.store') }}">
            @csrf
            <input type="text" class="w-full border p-2 mb-4" name="title" value="{{ old('title', $post->title) }}"
                placeholder="Title">
            @error('title') <span class="text-red-500">{{ $message }}</span> @enderror

            <textarea type="hidden" id="blocks" name="blocks" hidden>{{ $post->blocks }}</textarea>
            @error('body') <span class="text-red-500">{{ $message }}</span> @enderror

            <div id="editorjs" style="border: 1px solid #ddd;"></div>

            <button type="submit" class="bg-blue-500 text-white p-2">Update Post</button>
        </form>

    </div>
</x-app-layout>

@vite('resources/js/editor.js')
