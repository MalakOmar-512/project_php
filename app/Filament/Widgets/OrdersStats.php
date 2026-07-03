<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use App\Models\Status;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OrdersStats extends StatsOverviewWidget
{
    protected int|string|array $columnSpan = 'full';

    // ميثود بتختار كلاس الألوان واتجاه الدوران بشكل عشوائي تماماً
    protected function getRandomNeonConfig(): string
    {
        $colorMixes = [
            'neon-mix-cyan-purple',
            'neon-mix-pink-yellow',
            'neon-mix-cyan-pink',
            'neon-mix-purple-yellow'
        ];

        $directions = [
            'neon-dir-normal',
            'neon-dir-reverse'
        ];

        $randomColor = $colorMixes[array_rand($colorMixes)];
        $randomDir = $directions[array_rand($directions)];

        // دمج الكلاسين مع بعض (مثال: neon-mix-cyan-purple neon-dir-reverse)
        return "{$randomColor} {$randomDir}";
    }

    protected function getStats(): array
    {
        $stats = [];

        // 1. الكارت الرئيسي الأول
        $stats[] = Stat::make('إجمالي الأوردرات', Order::count())
            ->description('كل الأوردرات')
            ->color('primary')
            ->url(route('filament.admin.resources.orders.index'))
            ->extraAttributes([
                'class' => $this->getRandomNeonConfig()
            ]);

        // 2. الـ Loop على باقي الحالات
        foreach (Status::all() as $status) {
            
            $color = match (strtolower($status->name)) {
                'pending' => 'warning',
                'assigned' => 'info',
                'out for delivery' => 'primary',
                'delivered' => 'success',
                'returned' => 'gray',
                'cancelled' => 'danger',
                default => 'primary',
            };

            $stats[] = Stat::make(
                $status->name,
                Order::where('status_id', $status->id)->count()
            )
            ->color($color)
            ->url(route('filament.admin.resources.orders.index') . '?status=' . $status->id)
            ->extraAttributes([
                'class' => $this->getRandomNeonConfig()
            ]);
        }

        return $stats;
    }
}