<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sponsor;

class SponsorsSeeder extends Seeder
{
    public function run(): void
    {
        Sponsor::insert([
            ['name' => 'SKS',          'logo_path' => 'sponsors/SKS.svg',         'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SEP',          'logo_path' => 'sponsors/SEP.svg',         'order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'P2P',          'logo_path' => 'sponsors/p2p.svg',         'order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Biznis Mreza', 'logo_path' => 'sponsors/biznismreza.svg', 'order' => 4, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
