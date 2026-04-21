@props(['value', 'label'])
<div class="flex flex-col items-center justify-center border border-glass rounded-2xl w-100 h-50 bg-ink">
    <h2 class="text-center text-6xl text-teal">{{ $value }}</h2>
    <p class="text-center text-slate">{{ $label }}</p>
</div>
