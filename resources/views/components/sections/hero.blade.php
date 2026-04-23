@props(['hero'])
<main class="flex items-center justify-center gap-5 flex-col mt-[10%]">
    <div>
        <p class="tracking-widest text-center text-slate">{{ $hero['eyebrow'] }}</p>
    </div>
    <div>
        <h1 class="text-center">
            <span class="text-teal text-7xl font-semibold">{{ $hero['heading_teal'] }}</span>
            <br>
            <span class="text-7xl font-semibold text-white">{{ $hero['heading_white'] }}</span>
        </h1>
    </div>
    <div class="w-1/3">
        <p class="text-center text-slate">{{ $hero['description'] }}</p>
    </div>
    <div class="flex items-center justify-center gap-5">
        <a href="{{ $hero['cta1_url'] }}" class="flex flex-row gap-2 align-middle justify-center bg-blue-300 border rounded-2xl border-white px-5 py-2">
            <p>{{ $hero['cta1_text'] }}</p>
            <img src="{{ asset('icons/hero/chevron-right.svg') }}" alt="">
        </a>
        <a href="{{ $hero['cta2_url'] }}" class="flex align-middle justify-center text-center border-white border rounded-2xl px-5 py-2 text-white">
            {{ $hero['cta2_text'] }}
        </a>
    </div>
</main>
