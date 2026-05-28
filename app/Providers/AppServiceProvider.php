<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        TextInput::macro('rupees', function () {
            return $this
                ->numeric()
                ->prefix('₹');
        });

        TextColumn::macro('rupees', function () {
            return $this
                ->formatStateUsing(
                    fn($state) =>
                    $state ? '₹ ' . number_format($state, 2) : '₹ 0.00'
                );
        });
    }
}
