@props(['equity'])
<div id="equity" class="flex flex-col lg:flex-row justify-center gap-10 mt-50 items-center mx-5 md:mx-10 lg:mx-20 lg:px-0 ">
    <div class="flex flex-col justify-center lg:w-[40%] gap-16">
        <div class="flex flex-col gap-5">
            <p class="text-slate text-center lg:text-start tracking-widest">{{ $equity['eyebrow'] ?? '' }}</p>
            <h2 class="text-white text-center lg:text-start text-5xl lg:text-6xl font-semibold">{{ $equity['heading'] ?? '' }}</h2>
        </div>
        <div class="text-white gap-5 flex flex-col text-center lg:text-start">
            <p class="whitespace-pre-wrap">{{ $equity['body'] ?? '' }}</p>
        </div>
    </div>
    <div class="flex lg:w-[40%] justify-center">
        <img src="{{ asset('img/equity.png') }}" alt="Zephyr Equity">
    </div>
</div>
