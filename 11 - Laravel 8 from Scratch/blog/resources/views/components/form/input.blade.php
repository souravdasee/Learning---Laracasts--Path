@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <input  {{ $attributes(['class' => 'border border-gray-300 p-2 w-full rounded-xl']) }}
            name="{{ $name }}"
            id="{{ $name }}"
            value="{{ old($name) }}"
            required
            {{ $attributes }}
    >

    <x-form.error name="{{ $name }}" />
</x-form.field>
