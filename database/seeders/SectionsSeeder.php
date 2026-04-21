<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Section::insert([
            ['name' => 'hero',    'created_at' => now(), 'updated_at' => now()],
            ['name' => 'about',   'created_at' => now(), 'updated_at' => now()],
            ['name' => 'equity',  'created_at' => now(), 'updated_at' => now()],
            ['name' => 'cta',     'created_at' => now(), 'updated_at' => now()],
            ['name' => 'footer',  'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
