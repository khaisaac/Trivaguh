<?php

namespace App\Filament\Widgets;

use App\Models\Transaction;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TransactionOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Transactions', Transaction::query()->count()),
            Stat::make('Total Amount (Pending)', 'Rp. ' . number_format(Transaction::query()->where('payment_status', 'pending')->sum('grand_total'), 0, ',', '.')),
            Stat::make('Total Amount (Paid)', 'Rp. ' . number_format(Transaction::query()->where('payment_status', 'paid')->sum('grand_total'), 0, ',', '.')),
        ];
    }
}
