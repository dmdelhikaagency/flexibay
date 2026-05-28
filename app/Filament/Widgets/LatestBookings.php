<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestBookings extends TableWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(fn(): Builder => Booking::query())

            ->columns([

                TextColumn::make('booking_reference')
                    ->searchable(),

                TextColumn::make('room_number'),

                TextColumn::make('check_in_date')
                    ->date(),

                TextColumn::make('check_out_date')
                    ->date(),

                TextColumn::make('booking_status')
                    ->badge(),

                TextColumn::make('payment_status')
                    ->badge(),
            ])

            ->filters([
                //
            ])

            ->headerActions([
                //
            ])

            ->recordActions([
                //
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }
}
