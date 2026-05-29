<?php

namespace App\Filament\Resources\Guests\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
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
                Select::make('gender')
                    ->options([
                        'male' => 'Male',
                        'female' => 'Female',
                        'other' => 'Other',
                    ])
                    ->searchable()
                    ->required(),
                DatePicker::make('date_of_birth'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->nullable(),
                TextInput::make('phone')
                    ->tel(),
                Textarea::make('address')
                    ->columnSpanFull()
                    ->nullable(),
                TextInput::make('city')->nullable(),
                TextInput::make('state')->nullable(),
                TextInput::make('country')->nullable(),
                TextInput::make('pin_code')->nullable(),
                Select::make('id_type')
                    ->options([
                        'adhaar_card' => 'Aadhaar Card',
                        'voter_id' => 'Voter ID',
                        'passport' => 'Passport',
                        'driver_license' => 'Driver License',
                        'other' => 'Other',
                    ])
                    ->searchable(),
                TextInput::make('id_number'),
                FileUpload::make('id_document_front')
                    ->image()
                    ->directory('guests/id-documents')
                    ->imageEditor()
                    ->downloadable()
                    ->openable(),
                FileUpload::make('id_document_back')
                    ->image()
                    ->directory('guests/id-documents')
                    ->imageEditor()
                    ->downloadable()
                    ->openable(),
                DatePicker::make('check_in_date'),
                DatePicker::make('check_out_date'),
                TextInput::make('room_number'),
                TextInput::make('booking_reference')->nullable(),
                Textarea::make('special_requests')
                    ->columnSpanFull()
                    ->nullable(),
                Textarea::make('internal_notes')
                    ->columnSpanFull()
                    ->nullable(),
                FileUpload::make('photo')
                    ->image()
                    ->disk('public')
                    ->directory('guests/photos')
                    ->imageEditor()
                    ->downloadable()
                    ->openable(),
                TextInput::make('company_name')->nullable(),
                TextInput::make('gst_number')->nullable(),
            ]);
    }
}
