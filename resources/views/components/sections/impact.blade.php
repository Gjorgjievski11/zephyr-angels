@props(["impactStats"])
<div id="impact" class="bg-glass flex flex-col justify-center items-center mt-50 border border-glass rounded-2xl mx-5 md:mx-10 lg:mx-20 py-20 gap-10">
    <div class="flex flex-col gap-5">
        <p class="text-slate text-center tracking-widest">IMPACT</p>
        <h2 class="text-white text-center text-5xl md:text-6xl">Numbers That Matter</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 w-full lg:w-1/2 px-5 md:px-10">
        @foreach($impactStats as $stat)
            <x-ui.impact-card :value="$stat->value" :label="$stat->label" />
        @endforeach
    </div>
</div>
