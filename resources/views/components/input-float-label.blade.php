@props([
    'inputTitle' => 'Default Title',
    'type' => 'text',
    'id' => '',
    'name' => '',
    'class' => '',
    'placeholder' => '',
    'labelClass' => ''
])


<div class="input-float-label-holder">
    <input type="text" class="input-float {{ $class }}" name="{{ $name }}" id="{{ $id }}" placeholder="{{ $placeholder }}">
    <label for="{{ $id }}" class="input-float-label {{ $labelClass }}">{{ $inputTitle }}</label>
</div>
