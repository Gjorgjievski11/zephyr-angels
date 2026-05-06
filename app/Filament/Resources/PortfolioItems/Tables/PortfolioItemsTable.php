<?php
namespace App\Filament\Resources\PortfolioItems\Tables;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
class PortfolioItemsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->reorderable('order')
            ->columns([
                ImageColumn::make('image_path')
                    ->getStateUsing(fn ($record) => ($record->image_path)),
                TextColumn::make('image_path')
                    ->label('Image Path')
                    ->searchable(),
                TextColumn::make('alt_text')
                    ->searchable(),
                TextColumn::make('order')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
