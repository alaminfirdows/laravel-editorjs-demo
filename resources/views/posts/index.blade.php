<x-app-layout>
    <x-slot name="header">
        {{ __('Posts' )}}

        <a href="{{ route('posts.create') }}" class="ml-4 text-sm text-gray-700 underline">Create Post</a>
    </x-slot>

    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 py-6">
        @forelse ($posts as $post)
        <div class="bg-white shadow-sm rounded-lg p-6 mb-6">
            <a href="{{ route('posts.show', $post->id) }}">
                <h2 class="text-xl font-bold text-gray-800">{{ $post->title }}</h2>
            </a>
            <p class="text-gray-600 mt-2">{{ $post->excerpt }}</p>
        </div>
        @empty
        <p>No posts found.</p>
        @endforelse

        {{ $posts->links() }}
    </div>
</x-app-layout>
