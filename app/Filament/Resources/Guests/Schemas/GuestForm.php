<?php

namespace App\Filament\Resources\Guests\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class GuestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('first_name')
                    ->required(),
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('gender'),
                DatePicker::make('date_of_birth'),
                TextInput::make('nationality'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('alternate_phone')
                    ->tel(),
                Textarea::make('address')
                    ->columnSpanFull(),
                TextInput::make('city'),
                TextInput::make('state'),
                TextInput::make('country'),
                TextInput::make('postal_code'),
                TextInput::make('id_type'),
                TextInput::make('id_number'),
                TextInput::make('id_document_front'),
                TextInput::make('id_document_back'),
                DatePicker::make('check_in_date'),
                DatePicker::make('check_out_date'),
                TextInput::make('room_number'),
                TextInput::make('booking_reference'),
                Textarea::make('special_requests')
                    ->columnSpanFull(),
                Textarea::make('internal_notes')
                    ->columnSpanFull(),
                TextInput::make('guest_photo'),
                TextInput::make('company_name'),
                TextInput::make('gst_number'),
            ]);
    }
}
