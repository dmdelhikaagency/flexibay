<?php

namespace App\Filament\Resources\Properties\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PropertyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Toggle::make('is_available')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                FileUpload::make('featured_image')
                    ->image(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->rupees(),
                TextInput::make('address'),
                TextInput::make('city'),
                TextInput::make('state'),
                TextInput::make('postal_code'),
                Toggle::make('has_meals')
                    ->required(),
            ]);
    }
}
