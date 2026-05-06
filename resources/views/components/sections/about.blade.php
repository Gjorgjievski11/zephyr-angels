@props(['about'])
<div id="about" class="flex flex-col lg:flex-row gap-16 pt-10 mx-5 md:mx-10 lg:mx-20 items-center justify-center mt-50">
    <div class="flex flex-col lg:w-1/3 gap-5">
        <h3 class="text-slate tracking-widest text-center lg:text-start">{{ $about['eyebrow'] ?? '' }}</h3>
        <h2 class="text-white text-5xl md:text-6xl font-semibold text-center lg:text-start">{{ $about['heading'] ?? '' }}</h2>
        <div class="text-slate gap-5 flex flex-col text-center lg:text-start">
            <p class="whitespace-pre-wrap">{{ $about['body'] ?? '' }}</p>
        </div>
    </div>
    <div class="lg:w-1/3 overflow-hidden justify-center items-center">
        <img src="{{ asset('img/about.jpg') }}" alt="" class="rounded-2xl">
    </div>
</div>
