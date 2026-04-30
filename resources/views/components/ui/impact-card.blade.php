@props(['value', 'label'])
<div class="flex flex-col items-center justify-center border border-glass rounded-2xl w-full h-40 lg:h-50 bg-ink">
    <h2 class="text-center text-4xl md:text-5xl lg:text-6xl text-teal">{{ $value }}</h2>
    <p class="text-center text-slate">{{ $label }}</p>
</div>
