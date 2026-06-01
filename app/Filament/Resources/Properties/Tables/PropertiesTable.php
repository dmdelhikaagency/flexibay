<?php

namespace App\Filament\Resources\Properties\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PropertiesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                IconColumn::make('is_available')
                    ->boolean(),
                TextColumn::make('title')
                    ->searchable(),
                ImageColumn::make('featured_image'),
                ImageColumn::make('image_option_1')
                    ->toggleable(isToggledHiddenByDefault: true),
                ImageColumn::make('image_option_2')
                    ->toggleable(isToggledHiddenByDefault: true),
                ImageColumn::make('image_option_3')
                    ->toggleable(isToggledHiddenByDefault: true),
                ImageColumn::make('image_option_4')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('price')
                    ->money('INR')
                    ->sortable(),
                TextColumn::make('combo_breakfast_lunch_dinner')
                    ->label('Combo: B+L+D')
                    ->money('INR')
                    ->sortable(),
                TextColumn::make('with_breakfast')
                    ->label('With Breakfast')
                    ->money('INR')
                    ->sortable(),
                TextColumn::make('address')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('city')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('state')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('postal_code')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
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
