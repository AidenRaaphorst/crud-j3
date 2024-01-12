<x-app-layout>
    <x-slot name="header">
        <h1>{{ $post->title }}</h1>
    </x-slot>

    <div class="flex flex-col justify-start items-start">
        <h2>Text: {{$post->message}}</h2>
        <h2>User ID: {{$post->user_id}}</h2>

        <form action="#" method="post">
            <label for="comment">Add a comment</label> <br>
            <input type="text" name="comment" class="text-black">
        </form>

        <p>Comments:</p>
        <div>
            {{ $post->comments }}
        </div>
    </div>
</x-app-layout>
