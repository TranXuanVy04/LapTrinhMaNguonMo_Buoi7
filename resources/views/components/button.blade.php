{{-- Component Button --}}
{{-- type: primary hoặc danger --}}
{{-- type mặc định là primary --}}

@props([
    'type' => 'primary'
])

<button

    {{ $attributes }}

    style="
        padding:8px 16px;
        border:none;
        border-radius:6px;
        cursor:pointer;

        color:white;

        background:
        {{ $type=='primary'
            ? '#2563EB'
            : '#DC2626' }};
    "

>

{{ $slot }}

</button>