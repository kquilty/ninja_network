<x-layout>
    <h1>{{ $ninja->name }}, {{ $ninja->age }}</h1>

    <div class="p-4 bg-white rounded shadow-md mt-4">
        <p><strong>Skill Level:</strong> {{ $ninja->skill }}</p>
        <p><strong>About Me:</strong></p>
        <p>{{ $ninja->bio }}</p>
    </div>
    <div class="p-4 bg-white rounded shadow-md mt-4">
        <strong>Dojo:</strong> {{ $ninja->dojo->name }}
        <p><strong>Location:</strong> {{ $ninja->dojo->location }}</p>
    </div>

    <a href="/ninjas" class="btn mt-4 inline-block">Back to Ninjas</a>

</x-layout>