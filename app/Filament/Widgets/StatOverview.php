<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use App\Models\Course;
use App\Models\Interest;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Courses', Course::all()->count()),
            Stat::make('Contacts', Contact::all()->count()),
            Stat::make('Interest', Interest::all()->count())
        ];
    }
}
