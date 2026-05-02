@props(['cta'])
<div class="flex items-center justify-center gap-5 flex-col mt-50">
    <div>
        <p class="lg:text-xl text-center text-slate tracking-widest">{{ $cta['eyebrow'] }}</p>
    </div>
    <div>
        <h1 class="text-center">
            <span class="text-6xl lg:text-8xl font-semibold text-white">{{ $cta['heading_white'] }}</span>
            <br>
            <span class="text-teal text-6xl lg:text-8xl font-semibold  [text-shadow:0_0_20px_teal]">{{ $cta['heading_teal'] }}</span>
        </h1>
    </div>
    <div class="mx-5 md:w-1/2">
        <p class="text-center text-slate lg:text-xl">{{ $cta['description'] }}</p>
    </div>
    <div class="flex flex-col lg:flex-row text-xl items-center justify-center gap-5">
        <a href="{{ $cta['cta1_url'] }}" class="flex flex-row gap-2 align-middle justify-center bg-linear-to-r from-[#F9F9F9] to-teal border rounded-2xl border-white px-5 py-2">
            <p>{{ $cta['cta1_text'] }}</p>
            <img src="{{ asset('icons/hero/chevron-right.svg') }}" alt="">
        </a>
        <a href="{{ $cta['cta2_url'] }}" class="flex align-middle justify-center text-center border-white border rounded-2xl px-5 py-2 text-white">
            {{ $cta['cta2_text'] }}
        </a>
    </div>
</div>
