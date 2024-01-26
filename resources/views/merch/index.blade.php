<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h1>Merch</h1>
        </div>
    </x-slot>

    <div class="flex flex-col justify-start items-center gap-4">
        <p>Hello</p>
        @foreach($items as $item)
            <div class="border-2 p-2 border-slate-900 h-60">
                <b>{{ $item->name }}</b>
                <img class="h-1/2" src="{{ $item->image_url }}" alt="{{ $item->image_url }}">
                <p>{{ $item->price }}</p>

                <a href="{{route('merch.show', $item->id)}}">
                    <div class="p-4 rounded bg-blue-400 hover:bg-blue-600">
                        Kopen
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</x-app-layout>
