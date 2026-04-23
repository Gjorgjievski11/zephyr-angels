@props(['equity'])
<div id="equity" class="flex justify-center gap-20 mt-50 items-stretch">
    <div class="flex flex-col justify-center w-[40%] gap-16">
        <div class="flex flex-col gap-5">
            <p class="text-slate text-start">{{ $equity['eyebrow'] }}</p>
            <h2 class="text-white text-start text-6xl">{{ $equity['heading'] }}</h2>
        </div>
        <div class="text-white gap-5 flex flex-col">
            <p>{{ $equity['paragraph1'] }}</p>
            <p>{{ $equity['paragraph2'] }}</p>
            <p>{{ $equity['paragraph3'] }}</p>
        </div>
    </div>
    <div class="flex w-[40%]">
        <img src="{{ asset('img/equity.png') }}" alt="Zephyr Equity">
    </div>
</div>
