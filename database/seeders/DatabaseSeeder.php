<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            SectionsSeeder::class,
            ImpactStatsSeeder::class,
            ServicesSeeder::class,
            PortfolioItemsSeeder::class,
            TeamMembersSeeder::class,
            SponsorsSeeder::class,
            SettingsSeeder::class,
            AdminUserSeeder::class,
        ]);
    }
}
