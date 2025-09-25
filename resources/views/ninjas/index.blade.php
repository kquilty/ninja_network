<x-layout>
    <h2>Available Ninjas</h2>
    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <x-card 
                    href="/ninjas/{{ $ninja['id'] }}"
                    :highlight="$ninja->skill > 70 ? true : false"
                >
                    <div>
                        {{ $ninja->name }} (Skill: {{ $ninja->skill }})
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>