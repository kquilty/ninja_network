<x-main-layout-component>
    <h2>Create New Ninja</h2>
    <form 
        action="{{ route('ninjas.createNewNinja') }}" 
        method="POST" 
    >
        @csrf <!-- weird security thing on every form. just do it. -->
        
        <label for="name">Name:</label>
        <input 
            type="text" 
            id="name" 
            name="name" 
            required 
            class="border border-gray-300 rounded px-2 py-1 mb-4 w bg-white"
        />

        <label for="skill">Age:</label>
        <input 
            type="number" 
            id="age" 
            name="age" 
            required 
            class="border border-gray-300 rounded px-2 py-1 mb-4 w bg-white"
        />

        <label for="skill">Skill Level (0-100):</label>
        <input 
            type="number" 
            id="skill" 
            name="skill" 
            required 
            class="border border-gray-300 rounded px-2 py-1 mb-4 w bg-white"
        />

        <label for="bio">Bio:</label>
        <textarea 
            id="bio" 
            name="bio" 
            rows="4" 
            class="border border-gray-300 rounded px-2 py-1 mb-4 w bg-white"
        ></textarea>

        <label for="name">Dojo:</label>
        <select 
            id="dojo_id" 
            name="dojo_id" 
            required 
            class="border border-gray-300 rounded px-2 py-1 mb-4 w bg-white"
        >
            <option value="">Select a Dojo</option
            @foreach ($dojos as $dojo)
                <option value="{{ $dojo->id }}">{{ $dojo->name }}</option>
            @endforeach
        </select>



        <button 
            type="submit" 
            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
        >
            Create Ninja
        </button>

    </form>
    
</x-main-layout-component>