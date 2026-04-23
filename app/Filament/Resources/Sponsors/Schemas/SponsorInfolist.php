<?php
namespace App\Filament\Resources\Sponsors\Schemas;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;

class SponsorInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('logo_path')
                    ->label('Image')
                    ->disk('public')
                    ->columnSpanFull(),
                TextEntry::make('name')
                    ->placeholder('-'),
                TextEntry::make('logo_path')
                    ->label('Logo Path'),
                TextEntry::make('order')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
