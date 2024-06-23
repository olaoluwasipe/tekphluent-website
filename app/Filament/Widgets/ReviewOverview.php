<?php

namespace App\Filament\Widgets;

use App\Models\Review;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ReviewOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Reviews', Review::all()->count()),
        ];
    }
}
