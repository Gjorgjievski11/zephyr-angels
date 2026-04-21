<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PortfolioItem;

class PortfolioItemsSeeder extends Seeder
{
    public function run(): void
    {
        PortfolioItem::insert([
            ['image_path' => 'img/portfolio/barkoder.svg',  'alt_text' => 'Barkoder',   'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['image_path' => 'img/portfolio/coach.svg',     'alt_text' => 'Coach',      'order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['image_path' => 'img/portfolio/hylosense.svg', 'alt_text' => 'Hylosense',  'order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['image_path' => 'img/portfolio/kalliq.svg',    'alt_text' => 'Kalliq',     'order' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['image_path' => 'img/portfolio/vendor.svg',    'alt_text' => 'Vendor',     'order' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['image_path' => 'img/portfolio/veli.svg',      'alt_text' => 'Veli',       'order' => 6, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
