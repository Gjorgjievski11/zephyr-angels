@props(["$portfolioItems"])
<div id="portfolio" class="bg-glass flex flex-col justify-center items-center mt-50 border border-glass rounded-2xl mx-20 py-20 gap-10">
    <div class="flex flex-col gap-5">
        <p class="text-slate text-center">PORTFOLIO</p>
        <h2 class="text-white text-center text-6xl">Take a Look at Our Portfolio</h2>
    </div>
    <div class="overflow-hidden w-full">
        <div class="flex w-max" id="marquee-track">
            @foreach([1, 2] as $pass)
                @foreach($portfolioItems as $item)
                    <x-ui.carousel-card src="{{ Storage::url($item->image_path) }}" alt="{{ $item->alt_text }}" />                @endforeach
            @endforeach
        </div>
    </div>
</div>
