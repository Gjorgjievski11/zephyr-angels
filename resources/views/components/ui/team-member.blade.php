@props(['image', 'name', 'role'])
<div class="flex flex-col text-white gap-3">
    <img src="{{ asset('img/team/' . $image) }}" alt="{{ $name }}">
    <p class="text-2xl text-center">{{ $name }}</p>
    <p class="text-xl text-center">{{ $role }}</p>
</div>
