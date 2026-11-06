@props([
    'variant' => 'btn-succes',//jika tidak didefinisikan
    'button' => '',
])
<button {{ $attributes->merge(['class' => 'btn btn-' . $variant]) }}>{{ $slot }}</button>