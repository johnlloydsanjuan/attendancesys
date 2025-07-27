@props([
    'inputTitle' => 'Default Title',
    'type' => 'text',
    'id' => '',
    'name' => '',
    'class' => '',
    'labelClass' => ''
])


<div class="input-float-label-holder">
    <input type="{{ $type }}" class="input-float {{ $class }}" name="{{ $name }}" id="{{ $id }}" placeholder=" ">
    <label for="{{ $id }}" class="input-float-label {{ $labelClass }}">{{ $inputTitle }}</label>
</div>
