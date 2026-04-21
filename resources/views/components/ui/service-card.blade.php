@props(['icon', 'title', 'description'])
<div class="flex flex-col gap-5 w-full rounded-2xl px-8 py-10 justify-start bg-glass border border-glass transition-all duration-300 hover:border-white/20">
    <div class="w-12 h-12 flex items-center justify-start">
        <img src="{{ asset('icons/services/' . $icon) }}" alt="{{ $title }}" class="max-h-full">
    </div>
    <div class="flex flex-col gap-3">
        <h2 class="text-white text-2xl font-semibold">{{ $title }}</h2>
        <p class="text-slate leading-relaxed text-lg">
            {{ $description }}
        </p>
    </div>
</div>
