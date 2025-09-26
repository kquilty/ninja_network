<x-layout>
    <h2>Available Ninjas: {{ $totalNinjas }}</h2>
    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <x-card 
                    href="{{ route('ninjas.show', $ninja->id) }}"
                    :highlight="$ninja->skill > 70 ? true : false"
                >
                    <div>
                        <b>{{ $ninja->name }} (Skill: {{ $ninja->skill }})</b>
                        <p>Dojo: {{ $ninja->dojo->name }}</p>
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>
    {{ $ninjas->links() }}
</x-layout>