<x-app-layout>
    <div class="max-w-4xl mx-auto">
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-gray-800">{{ $post->title }}</h2>

            <div class="mt-4">
                <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            </div>
        </div>

        <div class="space-y-6">
            <div class="bg-white shadow-sm border p-6">
                {!! $post->body !!}
            </div>

            <div class="bg-gray-50 p-6 border font-mono">
                <pre id="json">{{ $post->blocks }}</pre>
            </div>
        </div>
    </div>


    @push('scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>

    <script>
        const codeElement = document.getElementById('json');
        const json = codeElement.textContent;
        const blocks = JSON.parse(json);
        codeElement.textContent = JSON.stringify(blocks, null, 2);

        hljs.highlightElement(codeElement);
    </script>
    @endpush
</x-app-layout>
