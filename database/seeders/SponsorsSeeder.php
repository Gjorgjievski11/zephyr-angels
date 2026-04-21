<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sponsor;

class SponsorsSeeder extends Seeder
{
    public function run(): void
    {
        Sponsor::insert([
            ['name' => 'SKS',          'logo_path' => 'img/sponsors/SKS.svg',          'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SEP',          'logo_path' => 'img/sponsors/SEP.svg',          'order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'P2P',          'logo_path' => 'img/sponsors/p2p.svg',          'order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Biznis Mreza', 'logo_path' => 'img/sponsors/biznismreza.svg',  'order' => 4, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
