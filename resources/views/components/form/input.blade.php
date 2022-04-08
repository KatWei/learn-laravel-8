@props(['name', 'labelName'])
<x-form.field>
    <x-form.label name="{{ $name }}" labelName="{{ $labelName }}"/>
    <input
           class="border border-gray-200 p-2 w-full rounded"
           name="{{ $name }}"
           id="{{ $name }}"
           {{ $attributes(['value' => old($name)]) }}
    >
    <x-form.error name="{{ $name }}"/>
</x-form.field>
