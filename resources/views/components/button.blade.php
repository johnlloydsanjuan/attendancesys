@props([
    'class' => '',
    'id' => '',
    'name' => '',
    'type' => 'submit',
    'icon' => null,
    'iconPosition' => 'default',
])


<div class="button-holder">
    <button class="button {{ $class }}" id="{{ $id }}" name="{{ $name }}" type="{{ $type }}">
        @if ($icon && ($iconPosition == 'default' || $iconPosition == 'left'))
        <i class="{{ $icon }} icon-{{ $iconPosition }}"></i>
        @endif
        {{ $slot }}
        @if ($icon && $iconPosition == 'right')
        <i class="{{ $icon }} icon-{{ $iconPosition }}"></i>
        @endif
    </button>
</div>
