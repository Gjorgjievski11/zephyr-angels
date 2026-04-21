<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeamMember;

class TeamMembersSeeder extends Seeder
{
    public function run(): void
    {
        TeamMember::insert([
            ['name' => 'Igor Mishevski',  'title' => 'Head of Investments',       'photo_path' => 'img/team/igor.png',  'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Riste Marevski', 'title' => 'Operations & Partnerships', 'photo_path' => 'img/team/riste.png', 'order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gogo Rafajlovski','title' => 'Managing Director',         'photo_path' => 'img/team/gogo.png',  'order' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
