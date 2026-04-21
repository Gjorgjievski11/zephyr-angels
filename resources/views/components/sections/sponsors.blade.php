@php
    $sponsors = ['SKS.svg', 'SEP.svg', 'p2p.svg', 'biznismreza.svg'];
@endphp

<div id="supporters" class="bg-glass flex flex-col justify-center items-center mt-[200px] border border-glass rounded-2xl mx-20 py-20 gap-10">
    <div class="flex flex-col gap-5">
        <p class="text-slate text-center">SUPPORTERS</p>
        <h2 class="text-white text-center text-6xl">Backed by the Best</h2>
    </div>
    <div class="flex flex-wrap justify-center gap-6">
        @foreach($sponsors as $sponsor)
            <x-ui.carousel-card src="{{ asset('img/sponsors/' . $sponsor) }}" />
        @endforeach
    </div>
</div>
