@props(["$impactStats"])
<div id="impact" class="bg-glass flex flex-col justify-center items-center mt-50 border border-glass rounded-2xl mx-20 py-20 gap-10">
    <div class="flex flex-col gap-5">
        <p class="text-slate text-center">IMPACT</p>
        <h2 class="text-white text-center text-6xl">Numbers That Matter</h2>
    </div>
    <div class="grid grid-cols-2 gap-10">
        @foreach($impactStats as $stat)
            <x-ui.impact-card :value="$stat->value" :label="$stat->label" />
        @endforeach
    </div>
</div>
