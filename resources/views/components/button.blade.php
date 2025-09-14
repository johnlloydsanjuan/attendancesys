@props([
    'class' => '',
    'id' => '',
    'name' => '',
    'type' => 'button',
    'icon' => null,
    'iconPosition' => 'default',
])


<div class="button-holder">
    <button class="button {{ $class }}" id="{{ $id }}" name="{{ $name }}"
        type="{{ $type }}">
        @if ($icon && ($iconPosition == 'default' || $iconPosition == 'left'))
            <i class="{{ $icon }} icon-{{ $iconPosition }}"></i>
        @endif
        <span class="button-text">{{ $slot }}</span>
        @if ($icon && $iconPosition == 'right')
            <i class="{{ $icon }} icon-{{ $iconPosition }}"></i>
        @endif
        <section class="button-loader" style="display:none">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </section>
    </button>
</div>
