@props(['image', 'name', 'role'])
<div class="flex flex-col text-white gap-3">
    <img src="{{ Storage::url($image) }}" alt="{{ $name }}" class="rounded-full aspect-square object-cover">
    <p class="text-2xl text-center">{{ $name }}</p>
    <p class="text-xl text-center">{{ $role }}</p>
</div>
