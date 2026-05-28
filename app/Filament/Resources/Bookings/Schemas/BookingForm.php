<?php

namespace App\Filament\Resources\Bookings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class BookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('guest_id')
                    ->required()
                    ->numeric(),
                TextInput::make('booking_reference')
                    ->required(),
                TextInput::make('room_number')
                    ->required(),
                DatePicker::make('check_in_date')
                    ->required(),
                DatePicker::make('check_out_date')
                    ->required(),
                TextInput::make('adults')
                    ->required()
                    ->numeric()
                    ->default(1),
                TextInput::make('children')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('room_price')
                    ->required()
                    ->numeric()
                    ->default(0.0)
                    ->rupees(),
                TextInput::make('tax_amount')
                    ->required()
                    ->numeric()
                    ->default(0.0)
                    ->rupees(),
                TextInput::make('total_amount')
                    ->required()
                    ->numeric()
                    ->default(0.0)
                    ->rupees(),
                TextInput::make('booking_status')
                    ->required()
                    ->default('pending'),
                TextInput::make('payment_status')
                    ->required()
                    ->default('unpaid'),
                TextInput::make('payment_method'),
                Textarea::make('special_requests')
                    ->columnSpanFull(),
                Textarea::make('internal_notes')
                    ->columnSpanFull(),
            ]);
    }
}
