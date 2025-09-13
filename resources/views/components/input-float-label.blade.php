@props([
    'labelTitle' => 'Default Title',
    'type' => 'text',
    'id' => '',
    'name' => '',
    'class' => '',
    'labelClass' => '',
])

<div class="input-float-label-holder">
    @if ($type == 'password')
        <input class="input-float {{ $class }}" id="{{ $id }}" name="{{ $name }}"
            type="{{ $type }}" placeholder=" ">
        <label class="input-float-label {{ $labelClass }}" for="{{ $id }}">{{ $slot }}</label>
        <i class="fa-regular fa-eye-slash toggle-password"></i>
    @else
        <input class="input-float {{ $class }}" id="{{ $id }}" name="{{ $name }}"
            type="{{ $type }}" placeholder=" ">
        <label class="input-float-label {{ $labelClass }}" for="{{ $id }}">{{ $slot }}</label>
    @endif
</div>
