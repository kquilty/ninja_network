<x-main-layout-component>
    <h2>Available Ninjas: {{ $totalNinjas }}</h2>
    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <x-ninja-list-card-component
                    href="{{ route('ninjas.profile', $ninja->id) }}"
                    :highlight="$ninja->skill > 70 ? true : false"
                >
                    <div>
                        <b>{{ $ninja->name }} (Skill: {{ $ninja->skill }})</b>
                        <p>Dojo: {{ $ninja->dojo->name }}</p>
                    </div>
                </x-ninja-list-card-component>
            </li>
        @endforeach
    </ul>
    {{ $ninjas->links() }}
</x-main-layout-component>