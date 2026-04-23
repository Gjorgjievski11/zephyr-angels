<?php
namespace App\Filament\Resources\Services\Schemas;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;

class ServiceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('icon')
                    ->label('Image')
                    ->disk('public')
                    ->columnSpanFull(),
                TextEntry::make('heading'),
                TextEntry::make('body')
                    ->columnSpanFull(),
                TextEntry::make('icon')
                    ->label('Icon Path'),
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
