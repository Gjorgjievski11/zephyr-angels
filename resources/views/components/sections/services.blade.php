@props(['services', 'servicesSection'])
<div id="services" class="flex flex-col justify-center items-center gap-10 mt-50 mx-5 md:mx-10 lg:mx-20">
    <div class="flex flex-col gap-5">
        <p class="text-slate text-center uppercase tracking-widest">{{ $servicesSection['eyebrow'] }}</p>
        <h2 class="text-white text-center text-5xl lg:text-6xl font-semibold">{{ $servicesSection['heading'] }}</h2>
    </div>
    <div class="text-slate flex gap-5 flex-col items-center justify-center lg:w-[65%] text-xl text-center">
        <p>{{ $servicesSection['desc1'] }}</p>
        <p>{{ $servicesSection['desc2'] }}</p>
    </div>
    <div id="cards" class="grid grid-cols-1 lg:grid-cols-2 gap-10 mt-10 w-full max-w-7xl">
        @foreach($services as $service)
            <x-ui.service-card :icon="$service->icon" :title="$service->heading" :description="$service->body" />
        @endforeach
    </div>
</div>
