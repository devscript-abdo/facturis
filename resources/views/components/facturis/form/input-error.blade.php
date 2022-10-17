@props([
    'message' => null,
    'role'=>'alert'
])

@php
    $attributes = $attributes->class([
        'invalid-feedback',
    ])->merge([
        'message' => $message,
        'role' => $role,
    ]);
@endphp

<span {{ $attributes }} >
    <strong>{{ $message }}</strong>
</span>