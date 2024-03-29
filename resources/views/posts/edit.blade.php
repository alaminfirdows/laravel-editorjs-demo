<x-app-layout>
    <div class="max-w-4xl mx-auto">
        <x-posts.form action="{{ route('posts.update', $post->id) }}" method="patch" :post="$post"
            actionTuttonText="Update Post" />
    </div>
</x-app-layout>

@vite('resources/js/editor.js')
