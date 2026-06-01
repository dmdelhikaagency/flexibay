<?php

namespace App\Filament\Resources\Bookings\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class BookingInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('booking_reference'),
                TextEntry::make('room_number'),
                TextEntry::make('check_in_date')
                    ->date(),
                TextEntry::make('check_out_date')
                    ->date(),
                TextEntry::make('adults')
                    ->numeric(),
                TextEntry::make('children')
                    ->numeric(),
                TextEntry::make('room_price')
                    ->money('INR'),
                TextEntry::make('tax_amount')
                    ->money('INR'),
                TextEntry::make('total_amount')
                    ->money('INR'),
                TextEntry::make('booking_status'),
                TextEntry::make('payment_status'),
                TextEntry::make('payment_method')
                    ->placeholder('-'),
                TextEntry::make('special_requests')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('internal_notes')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
