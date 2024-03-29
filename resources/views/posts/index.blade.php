<x-app-layout>
    <div class="max-w-4xl mx-auto">
        <div class="space-y-6">
            @forelse ($posts as $post)
            <div
                class="bg-white shadow-sm border border-gray-200 hover:border-dotted p-6 hover:border-gray-500 border-transparent">
                <a href="{{ route('posts.show', $post->id) }}">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $post->title }}</h2>
                </a>
                <p class="text-gray-700 mt-2">{{ $post->excerpt }}</p>

                <div class="mt-4 space-x-5 text-sm font-medium text-gray-500">
                    <a href="{{ route('posts.show', $post->id) }}">View</a>
                    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                </div>
            </div>
            @empty
            <p>No posts found.</p>
            @endforelse
        </div>

        <div class="py-6">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
