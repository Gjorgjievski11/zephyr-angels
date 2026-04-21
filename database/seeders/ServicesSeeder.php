<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    public function run(): void
    {
        Service::insert([
            ['heading' => 'Pitching Events',   'body' => 'High-energy, curated events where top startups meet active investors and real deals begin.',                      'icon' => 'Icon1.svg', 'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['heading' => 'Due Diligence',     'body' => 'Thorough evaluation of opportunities to give investors confidence and founders credibility.',                     'icon' => 'Icon2.svg', 'order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['heading' => 'Deal Flow',         'body' => 'A continuous pipeline of vetted, high-potential startups ready for investment.',                                  'icon' => 'Icon3.svg', 'order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['heading' => 'Mentorship',        'body' => 'Hands-on guidance from experienced operators and investors to accelerate growth.',                                'icon' => 'Icon4.svg', 'order' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['heading' => 'Network Access',    'body' => 'Direct connections to a regional and international ecosystem of investors and partners.',                         'icon' => 'Icon5.svg', 'order' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['heading' => 'Masterclasses',     'body' => 'Expert-led sessions equipping founders and investors with the tools to win.',                                     'icon' => 'Icon6.svg', 'order' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['heading' => 'SPV Investing',     'body' => 'Structured investment vehicles enabling co-investors to move fast and efficiently.',                              'icon' => 'Icon7.svg', 'order' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['heading' => 'Portfolio Support', 'body' => 'Ongoing support post-investment to help portfolio companies scale and succeed.',                                  'icon' => 'Icon8.svg', 'order' => 8, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
