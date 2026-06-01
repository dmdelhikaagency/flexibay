<?php

namespace App\Filament\Resources\Bookings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BookingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('booking_reference')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('booking_platform')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('room_number')
                    ->searchable(),
                TextColumn::make('check_in_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('check_out_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('adults')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('children')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('room_price')
                    ->money('INR')
                    ->sortable(),
                TextColumn::make('tax_amount')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->money('INR')
                    ->sortable(),
                TextColumn::make('total_amount')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->money('INR')
                    ->sortable(),
                TextColumn::make('booking_status')
                    ->searchable(),
                TextColumn::make('payment_status')
                    ->searchable(),
                TextColumn::make('payment_method')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
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
