{{-- Props that we'd like to accept --}}
@props(['highlight' => 'false'])

<div 
    @class([
        'card',
        'highlight' => $highlight
    ])
>
    {{ $slot }}

    <div>
        <a {{ $attributes }}>View Details</a>
    </div>
</div>