@props([
    'id' => null,
    'type' => 'text',
    'name' => null,
    'value' => null,
    'disabled' => false,
    'required' => false,
    'placeholder' => null,
    'autofocus' => false,
    'autocomplete' => null,
    'readonly' => false,
])

@php
    $attributes = $attributes->class([
        'form-control',
        'is-invalid' => $errors->has($name),
    ])->merge([
        'id' => $id,
        'type' => $type,
        'name' => $name,
        'value' => $value,
        'disabled' => $disabled,
        'required' => $required,
        'placeholder' => $placeholder,
        'autofocus' => $autofocus,
        'autocomplete' => $autocomplete,
        'readonly' => $readonly,
    ]);
@endphp

<input {{ $attributes }} />