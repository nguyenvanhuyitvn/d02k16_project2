<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::firstOrCreate(
            ['name' => 'Apple'],
            [
                'description' => 'Các sản phẩm điện thoại và thiết bị di động thương hiệu Apple.',
                'status' => 1,
            ]
        );

        Category::firstOrCreate(
            ['name' => 'Samsung'],
            [
                'description' => 'Smartphone và phụ kiện nổi bật của Samsung.',
                'status' => 1,
            ]
        );

        Category::firstOrCreate(
            ['name' => 'Xiaomi'],
            [
                'description' => 'Điện thoại Xiaomi với cấu hình mạnh và giá tốt.',
                'status' => 1,
            ]
        );

        Category::firstOrCreate(
            ['name' => 'Oppo'],
            [
                'description' => 'Điện thoại Oppo thiết kế thời trang và camera tốt.',
                'status' => 1,
            ]
        );
    }
}
