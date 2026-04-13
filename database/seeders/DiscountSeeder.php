<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('discounts')->insert([
            [
                'code' => 'SALE10',
                'type' => 'percent',
                'value' => 10,
                'description' => 'Giảm 10% cho đơn hàng',
                'active' => true,
                'max_uses' => 100,
                'used_count' => 0,
                'expires_at' => Carbon::now()->addDays(30),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'WELCOME50',
                'type' => 'fixed',
                'value' => 50000,
                'description' => 'Giảm 50.000đ cho đơn hàng đầu tiên',
                'active' => true,
                'max_uses' => 200,
                'used_count' => 0,
                'expires_at' => Carbon::now()->addDays(60),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'FREESHIP',
                'type' => 'fixed',
                'value' => 50000,
                'description' => 'Giảm phí vận chuyển tối đa 50.000đ',
                'active' => true,
                'max_uses' => null,
                'used_count' => 0,
                'expires_at' => Carbon::now()->addDays(90),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
