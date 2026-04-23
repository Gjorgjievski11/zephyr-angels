@props(['cta'])
<div class="flex items-center justify-center gap-5 flex-col mt-[10%]">
    <div>
        <p class="text-xl text-center text-white">{{ $cta['eyebrow'] }}</p>
    </div>
    <div>
        <h1 class="text-center">
            <span class="text-7xl font-semibold text-white">{{ $cta['heading_white'] }}</span>
            <br>
            <span class="text-teal text-7xl font-semibold">{{ $cta['heading_teal'] }}</span>
        </h1>
    </div>
    <div class="w-1/3">
        <p class="text-center text-slate">{{ $cta['description'] }}</p>
    </div>
    <div class="flex items-center justify-center gap-5">
        <a href="{{ $cta['cta1_url'] }}" class="flex flex-row gap-2 align-middle justify-center bg-blue-300 border rounded-2xl border-white px-5 py-2">
            <p>{{ $cta['cta1_text'] }}</p>
            <img src="{{ asset('icons/hero/chevron-right.svg') }}" alt="">
        </a>
        <a href="{{ $cta['cta2_url'] }}" class="flex align-middle justify-center text-center border-white border rounded-2xl px-5 py-2 text-white">
            {{ $cta['cta2_text'] }}
        </a>
    </div>
</div>
