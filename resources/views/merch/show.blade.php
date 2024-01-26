<x-app-layout>
    <x-slot name="header">
        Merch kopen
    </x-slot>

    <div class="flex flex-col justify-start items-start">
        <h2>Merch item: {{ $item->name }}</h2>

        <form action="{{ route("merch.store") }}" method="post">
            @csrf
            <label for="address">Adres: </label> <br>
            <input type="text" name="address" class="text-black">
            <br/>
            <label for="zipcode">Postcode: </label> <br>
            <input type="text" name="zipcode" class="text-black">

            <input type="text" name="merch-id" value="{{ $item->id }}" hidden>
            <br/>
            <button type="submit" class="p-4 rounded bg-blue-400 hover:bg-blue-600">Kopen</button>
        </form>
    </div>
</x-app-layout>
