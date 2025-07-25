<?php

namespace App\Filament\Resources\GenreResource\Pages;

use App\Filament\Resources\GenreResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;


class CreateGenre extends CreateRecord
{
    protected static string $resource = GenreResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->hasSavedAndContinueEditing()
            ? static::getResource()::getUrl('create')
            : static::getResource()::getUrl();
    }
}