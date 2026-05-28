<?php

namespace App\Filament\Resources\Guests\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class GuestInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('first_name'),
                TextEntry::make('last_name'),
                TextEntry::make('gender')
                    ->placeholder('-'),
                TextEntry::make('date_of_birth')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('nationality')
                    ->placeholder('-'),
                TextEntry::make('email')
                    ->label('Email address')
                    ->placeholder('-'),
                TextEntry::make('phone')
                    ->placeholder('-'),
                TextEntry::make('alternate_phone')
                    ->placeholder('-'),
                TextEntry::make('address')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('city')
                    ->placeholder('-'),
                TextEntry::make('state')
                    ->placeholder('-'),
                TextEntry::make('country')
                    ->placeholder('-'),
                TextEntry::make('postal_code')
                    ->placeholder('-'),
                TextEntry::make('id_type')
                    ->placeholder('-'),
                TextEntry::make('id_number')
                    ->placeholder('-'),
                TextEntry::make('id_document_front')
                    ->placeholder('-'),
                TextEntry::make('id_document_back')
                    ->placeholder('-'),
                TextEntry::make('check_in_date')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('check_out_date')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('room_number')
                    ->placeholder('-'),
                TextEntry::make('booking_reference')
                    ->placeholder('-'),
                TextEntry::make('special_requests')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('internal_notes')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('guest_photo')
                    ->placeholder('-'),
                TextEntry::make('company_name')
                    ->placeholder('-'),
                TextEntry::make('gst_number')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
