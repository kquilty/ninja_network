<x-layout>
    <h1>{{ $ninja->name }}</h1>

    <div class="p-4 bg-gray-100 rounded shadow-md">
        <p><strong>Skill Level:</strong> {{ $ninja->skill }}</p>
        <p><strong>About Me:</strong></p>
        <p>{{ $ninja->bio }}</p>
        <a href="/ninjas" class="btn mt-4 inline-block">Back to Ninjas</a>
    </div>
</x-layout>