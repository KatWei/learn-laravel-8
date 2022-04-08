@props(['name', 'labelName', 'type' => 'text'])
<x-form.field>
    <x-form.label name="{{ $name }}" labelName="{{ $labelName }}"/>
    <textarea name="{{ $name }}" id="{{ $name }}" class="border border-gray-200 p-2 w-full rounded">{{ $slot ?? old($name) }}</textarea>
    <x-form.error name="{{ $name }}"/>
</x-form.field>
