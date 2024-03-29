<form method="post" action="{{ $action }}">
    @method($method)
    @csrf

    <div class="space-y-6">
        <div>
            <input type="text" class="w-full border px-4 py-3 outline-gray-600 focus:outline-none" name="title"
                value="{{ old('title', $post->title ?? '') }}" placeholder="Title">

            @error('title')
            <p class="text-red-500 text-sm mt-3">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <textarea type="hidden" id="blocks" name="blocks" hidden>{{ old('blocks', $post->blocks ?? '') }}</textarea>
            <div id="editorjs" style="border: 1px solid #ddd;"></div>

            @error('blocks')
            <p class="text-red-500 text-sm mt-3">{{ $message }}</p>
            @enderror
        </div>


        <button type="submit" class="bg-gray-900 text-white px-4 py-3">{{ $actionTuttonText }}</button>
    </div>
</form>
