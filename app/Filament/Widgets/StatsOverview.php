<?php

namespace App\Filament\Widgets;

use App\Models\Enquiry;
use App\Models\Property;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Počet nemovitostí', Property::count()),
            Stat::make('Počet dotazů', Enquiry::count()),
            Stat::make('Počet dostupných nemovitostí', Property::where('status', 'available')->count()),
            Stat::make('Počet pronajmutých nemovitostí', Property::where('status', 'rented')->count()),
            Stat::make('Počet prodaných nemovitostí', Property::where('status', 'sold')->count()),
        ];
    }
}
