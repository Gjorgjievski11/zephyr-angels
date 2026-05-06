<div>
    <header class="flex h-12 bg-black justify-between items-center px-8 md:px-16 sticky top-0 py-10 z-50">
        <div class="w-1/2 h-12 flex">
            <img src="{{ asset('img/logo.svg') }}" alt="Zephyr Angels">
        </div>
        <nav class="lg:flex justify-between gap-5 text-slate flex-row items-center hidden">
            <a href="#about">About Us</a>
            <a href="#impact">Impact</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#equity">Zephyr Equity</a>
            <a href="#team">Team</a>
            <a href="#supporters">Supporters</a>
            <a href="#contact">Contact</a>
        </nav>
        <button id="nav-toggle" class="lg:hidden text-white">
            <img id="nav-hamburger" src="{{ asset('icons/navbar/hamburger.svg') }}" alt="Menu">
            <img id="nav-cancel"    src="{{ asset('icons/navbar/cancel.svg') }}"    alt="Close" class="hidden">
        </button>
    </header>
    <div id="nav-menu" class="lg:hidden px-4 pt-2 pb-6 sticky top-[88px] z-40 w-full hidden">
        <div class="bg-teal-dark rounded-2xl px-8 py-6 flex flex-col gap-6 text-white text-xl font-light">
            <a href="#about"      class="nav-link">About Us</a>
            <a href="#impact"     class="nav-link">Impact</a>
            <a href="#services"   class="nav-link">Services</a>
            <a href="#portfolio"  class="nav-link">Portfolio</a>
            <a href="#equity"     class="nav-link">Zephyr Equity</a>
            <a href="#team"       class="nav-link">Team</a>
            <a href="#supporters" class="nav-link">Supporters</a>
            <a href="#contact"    class="nav-link">Contact</a>
        </div>
    </div>
</div>
