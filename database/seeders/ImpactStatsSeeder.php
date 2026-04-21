<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ImpactStat;

class ImpactStatsSeeder extends Seeder
{
    public function run(): void
    {
        ImpactStat::insert([
            ['label' => 'Total Investment',       'value' => '€370,000', 'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Startups Funded',         'value' => '6',        'order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Pitch Events Organized',  'value' => '7',        'order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Masterclasses Hosted',    'value' => '3',        'order' => 4, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
