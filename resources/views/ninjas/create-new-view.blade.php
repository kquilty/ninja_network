<x-main-layout-component>
    <h2>Create New Ninja</h2>
    <form 
        action="{{ route('ninjas.createNewNinja') }}" 
        method="POST" 
    >
        @csrf <!-- weird security thing on every form. just do it. -->
        

        @if($errors->any())
            <div class="mt-4 mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                <ul style="margin-block: 0;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <label for="name">Name:</label>
        <input 
            type="text" 
            id="name" 
            name="name" 
            value="{{ old('name') }}"
            required 
            class="border border-gray-300 rounded px-2 py-1 mb-4 w bg-white"
        />

        <label for="skill">Age:</label>
        <input 
            type="number" 
            id="age" 
            name="age" 
            value="{{ old('age') }}"
            required 
            class="border border-gray-300 rounded px-2 py-1 mb-4 w bg-white"
        />

        <label for="skill">Skill Level (0-100):</label>
        <input 
            type="number" 
            id="skill" 
            name="skill" 
            value="{{ old('skill') }}"
            required 
            class="border border-gray-300 rounded px-2 py-1 mb-4 w bg-white"
        />

        <label for="bio">Bio:</label>
        <textarea 
            id="bio" 
            name="bio" 
            rows="4" 
            class="border border-gray-300 rounded px-2 py-1 mb-4 w bg-white"
        >{{ old('bio') }}</textarea>

        <label for="name">Dojo:</label>
        <select 
            id="dojo_id" 
            name="dojo_id"
            required 
            class="border border-gray-300 rounded px-2 py-1 mb-4 w bg-white"
        >
            <option value="">Select a Dojo</option
            @foreach ($dojos as $dojo)
                <option 
                    value="{{ $dojo->id }}"
                    {{ old('dojo_id') == $dojo->id ? 'selected' : '' }}
                >{{ $dojo->name }}</option>
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