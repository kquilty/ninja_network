{{-- Props that we'd like to accept --}}
@props(['highlight' => 'false'])

<div 
    @class([
        'ninja-list-card',
        'ninja-list-card-highlight' => $highlight
    ])
>
    {{ $slot }}

    <div>
        <a {{ $attributes }}>View Details</a>
    </div>
</div>