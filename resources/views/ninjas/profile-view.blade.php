<x-main-layout-component>

    <h1>{{ $ninja->name }}, {{ $ninja->age }}</h1>

    <div class="p-4 bg-white rounded shadow-md mt-4">
        <p><strong>Skill Level:</strong> {{ $ninja->skill }}</p>
        <p><strong>About Me:</strong></p>
        <p>{{ $ninja->bio }}</p>
    </div>
    <div class="p-4 bg-white rounded shadow-md mt-4">
        <strong>Dojo:</strong> {{ $ninja->dojo->name }}
        <p><strong>Location:</strong> {{ $ninja->dojo->location }}</p>
        <p><strong>Description:</strong> {{ $ninja->dojo->description }}</p>
    </div>

    <div class="mt-4" style="display: flex; justify-content: space-between;">
        <a href="/ninjas" class="btn">Back to Ninjas</a>

        <form 
            action="{{ route('ninjas.deleteNinja', ['id' => $ninja->id]) }}" 
            method="POST" 
            onsubmit="return confirm('Are you sure you want to delete this ninja?');"
        >
            @csrf

            {{-- Since HTML forms do not support DELETE method natively... --}}
            @method('DELETE')

            <button 
                type="submit" 
                class="btn btn-danger"
            >
                Delete Ninja
            </button>
        </form>
    </div>

</x-main-layout-component>