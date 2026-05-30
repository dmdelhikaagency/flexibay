<?php

namespace App\Filament\Resources\Bookings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class BookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
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
                Select::make('booking_platform')
                    ->options([
                        'walk-in' => 'Walk-In\'s',
                        'website' => 'Website',
                        'Third-Party Platform' => [
                            'mmt' => 'MakeMyTrip',
                            'booking.com' => 'Booking.com',
                        ]
                    ])
                    ->searchable()
                    ->required(),
                Select::make('booking_status')
                    ->options([
                        'pending' => 'Pending',
                        'confirmed' => 'Confirmed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->searchable()
                    ->required(),
                Select::make('payment_status')
                    ->options([
                        'paid' => 'Paid',
                        'unpaid' => 'Unpaid',
                    ])
                    ->searchable()
                    ->required(),
                Select::make('payment_method')
                    ->options([
                        'cash' => 'Cash',
                        'card' => 'Credit/ Debit Card',
                        'online' => 'Online Payment',
                    ])
                    ->searchable()
                    ->required(),
                Textarea::make('special_requests')
                    ->columnSpanFull(),
                Textarea::make('internal_notes')
                    ->columnSpanFull(),
            ]);
    }
}
