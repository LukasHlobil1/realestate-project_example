<?php

namespace App\Filament\Resources\Properties\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PropertiesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Název')
                    ->searchable(),
                TextColumn::make('Typ')
                    ->badge(),
                TextColumn::make('Nabízený druh')
                    ->badge(),
                TextColumn::make('Status')
                    ->badge(),
                TextColumn::make('Cena')
                    ->money('Kč')
                    ->sortable(),
                TextColumn::make('Cena za metr čtvereční')
                    ->money('Kč')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('Adresa')
                    ->searchable(),
                TextColumn::make('Město')
                    ->searchable(),
                TextColumn::make('Kraj')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('Země')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('PSČ')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('zem. šířka')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('zem. délka')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('Pokoje')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('Koupelny')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('Rozloha')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('Postaveno')
                    ->numeric()
                    ->sortable(),
                IconColumn::make('Vybaveno')
                    ->boolean(),
                IconColumn::make('Parkování')
                    ->boolean(),
                TextColumn::make('parking')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('Doplnění')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('meta_title')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                IconColumn::make('Je vybavený ?')
                    ->boolean(),
                IconColumn::make('Je aktivní ?')
                    ->boolean(),
                TextColumn::make('Žhavá nabídka ?')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('Jméno prodejce')
                    ->searchable(),
                TextColumn::make('Telefon prodejce')
                    ->searchable(),
                TextColumn::make('E-mail prodejce')
                    ->searchable(),
                TextColumn::make('Vytvořeno v')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('Aktualizováno v')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
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
