@props([
    'type' => 'radio',
    'id' => '',
    'name' => '',
    'value' => '',
    'checked' => '',
])
<input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}"
    {{ $checked ? 'checked' : '' }}>
