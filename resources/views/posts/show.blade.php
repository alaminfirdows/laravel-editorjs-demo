<x-app-layout>
    <x-slot name="header">
        {{ __('Posts' )}}
    </x-slot>

    <div class="max-w-4xl mx-auto">
        <div class="bg-white shadow-sm rounded-lg p-6 mb-6">
            <a href="{{ route('posts.show', $post->id) }}">
                <h2 class="text-xl font-bold text-gray-800">{{ $post->title }}</h2>
            </a>
            <p class="text-gray-600 mt-2">{!! $post->body !!}</p>
        </div>

        <div class="bg-gray-50 p-6 border font-mono">
            {{ $post->blocks }}
        </div>
    </div>
</x-app-layout>
