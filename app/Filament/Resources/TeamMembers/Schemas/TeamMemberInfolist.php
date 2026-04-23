<?php
namespace App\Filament\Resources\TeamMembers\Schemas;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;

class TeamMemberInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('photo_path')
                    ->label('Image')
                    ->disk('public')
                    ->columnSpanFull(),
                TextEntry::make('name'),
                TextEntry::make('title'),
                TextEntry::make('photo_path')
                    ->label('Photo Path'),
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
