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
    <div class="md:w-1/2">
        <p class="text-center lg:text-xl text-slate">{{ $hero['description'] }}</p>
    </div>
    <div class="flex flex-col md:flex-row items-center justify-center gap-5">
        <a href="{{ $hero['cta1_url'] }}" class="text-xl flex flex-row gap-2 align-middle justify-center bg-linear-to-r from-[#F9F9F9] to-teal  border rounded-2xl border-white px-5 py-2">
            <p>{{ $hero['cta1_text'] }}</p>
            <img src="{{ asset('icons/hero/chevron-right.svg') }}" alt="">
        </a>
        <a href="{{ $hero['cta2_url'] }}" class="text-xl flex align-middle justify-center text-center border-white border rounded-2xl px-5 py-2 text-white">
            {{ $hero['cta2_text'] }}
        </a>
    </div>
</main>
