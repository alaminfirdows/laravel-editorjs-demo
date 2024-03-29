<x-app-layout>
    <div class="max-w-4xl mx-auto">
        <x-posts.form action="{{ route('posts.store') }}" method="post" actionTuttonText="Create Post" />
    </div>
</x-app-layout>
@vite('resources/js/editor.js')
