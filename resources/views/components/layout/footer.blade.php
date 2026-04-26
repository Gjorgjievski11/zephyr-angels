@props(['footer'])
<footer id="contact" class="flex flex-col justify-center items-center mt-48 mb-12 border-2 border-glass rounded-2xl mx-5 md:mx-10 lg:mx-20 py-20 gap-10">
    <div class="flex flex-col lg:flex-row gap-10 border-b-2 border-glass pb-10">
        <div class="flex flex-col gap-5 px-5 lg:w-1/3">
            <p class="text-xl text-white">Zephyr Angels</p>
            <p class="text-slate">{{ $footer['description'] }}</p>
        </div>
        <div class="flex flex-col gap-5 px-5 lg:w-1/3">
            <p class="text-xl text-white">Contact</p>
            <div class="text-slate flex flex-col gap-2">
                <p>{{ $footer['email'] }}</p>
                <p>{{ $footer['phone'] }}</p>
                <p>{{ $footer['address'] }}</p>
            </div>
        </div>
        <div class="flex flex-col gap-5 px-5 lg:w-1/3">
            <p class="text-white text-xl">Follow Us</p>
            <div class="flex gap-4">
                <a href="{{ $footer['linkedin_url'] }}"><img src="{{ asset('icons/footer/LinkedIn.svg') }}" alt="LinkedIn"></a>
                <a href="{{ $footer['instagram_url'] }}"><img src="{{ asset('icons/footer/Instagram.svg') }}" alt="Instagram"></a>
                <a href="{{ $footer['crunchbase_url'] }}"><img src="{{ asset('icons/footer/CrunchBase.svg') }}" alt="CrunchBase"></a>
                <a href="{{ $footer['mail_url'] }}"><img src="{{ asset('icons/footer/Mail.svg') }}" alt="Mail"></a>
            </div>
        </div>
    </div>

    <p class="text-center text-slate">© 2026 Zephyr Angels. All rights reserved.</p>

    <img src="{{ asset('img/brainster-badge.svg') }}" alt="Created by Brainster Next Students">
</footer>
