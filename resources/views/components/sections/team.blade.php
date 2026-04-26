@props(["teamMembers"])
<div id="team" class="flex flex-col justify-center gap-20 mt-50 mx-5 md:mx-10 lg:mx-20 items-center">
    <div class="flex flex-col gap-5">
        <p class="text-slate text-center tracking-widest">TEAM</p>
        <h2 class="text-white text-center text-5xl lg:text-6xl font-semibold">Meet the Team</h2>
    </div>
    <div class="flex flex-col lg:flex-row gap-24">
        @foreach($teamMembers as $member)
            <x-ui.team-member :image="$member->photo_path" :name="$member->name" :role="$member->title" />
        @endforeach
    </div>
</div>
