@props(["$teamMembers"])
<div id="team" class="flex flex-col justify-center gap-20 mt-50 items-center">
    <div class="flex flex-col gap-5">
        <p class="text-slate text-center">TEAM</p>
        <h2 class="text-white text-center text-6xl">Meet the Team</h2>
    </div>
    <div class="flex gap-24">
        @foreach($teamMembers as $member)
            <x-ui.team-member :image="$member->photo_path" :name="$member->name" :role="$member->title" />
        @endforeach
    </div>
</div>
