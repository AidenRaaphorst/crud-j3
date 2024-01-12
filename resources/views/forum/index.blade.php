<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h1>Forum Posts</h1>

            <a href="{{route('forums.create')}}">
                <div class="px-4 py-2 rounded-2xl bg-blue-500 active:bg-blue-600">Create a forum</div>
            </a>
        </div>
    </x-slot>

    <div class="flex flex-col justify-start items-center gap-4">
        @foreach($posts as $post)
            <div class="border-2 p-2 border-slate-900">
                <a href="{{route('forums.show', $post->id)}}">
                    <b>{{ $post->title }}</b>
                </a>
                <p>{{ $post->message }}</p>
            </div>
        @endforeach
    </div>
</x-app-layout>
