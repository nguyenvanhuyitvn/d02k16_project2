<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $apple = Category::firstWhere('name', 'Apple');
        $samsung = Category::firstWhere('name', 'Samsung');
        $xiaomi = Category::firstWhere('name', 'Xiaomi');
        $oppo = Category::firstWhere('name', 'Oppo');

        Product::firstOrCreate(
            ['name' => 'iPhone 15'],
            [
                'category_id' => $apple?->id,
                'thumbnail' => 'images/products/iphone15.jpg',
                'description' => 'iPhone 15 với chip A16, màn hình Super Retina XDR và camera nâng cấp.',
                'price' => 28990000,
                'quantity' => 20,
            ]
        );

        Product::firstOrCreate(
            ['name' => 'iPhone 14 Plus'],
            [
                'category_id' => $apple?->id,
                'thumbnail' => 'images/products/iphone14plus.jpg',
                'description' => 'iPhone 14 Plus với pin lâu và hệ điều hành iOS mượt mà.',
                'price' => 21990000,
                'quantity' => 16,
            ]
        );

        Product::firstOrCreate(
            ['name' => 'Samsung Galaxy S24'],
            [
                'category_id' => $samsung?->id,
                'thumbnail' => 'images/products/galaxy-s24.jpg',
                'description' => 'Galaxy S24 sở hữu camera chuyên nghiệp và hiệu năng mạnh mẽ.',
                'price' => 23990000,
                'quantity' => 18,
            ]
        );

        Product::firstOrCreate(
            ['name' => 'Samsung Galaxy A55'],
            [
                'category_id' => $samsung?->id,
                'thumbnail' => 'images/products/galaxy-a55.jpg',
                'description' => 'Galaxy A55 phù hợp với người dùng cần điện thoại hiệu năng tốt giá mềm.',
                'price' => 7790000,
                'quantity' => 30,
            ]
        );

        Product::firstOrCreate(
            ['name' => 'Xiaomi Redmi Note 13'],
            [
                'category_id' => $xiaomi?->id,
                'thumbnail' => 'images/products/redmi-note-13.jpg',
                'description' => 'Redmi Note 13 màn hình AMOLED, pin lớn và sạc nhanh.',
                'price' => 5490000,
                'quantity' => 35,
            ]
        );

        Product::firstOrCreate(
            ['name' => 'Xiaomi 14'],
            [
                'category_id' => $xiaomi?->id,
                'thumbnail' => 'images/products/xiaomi-14.jpg',
                'description' => 'Xiaomi 14 cấu hình cao, thiết kế mỏng và camera xuất sắc.',
                'price' => 12990000,
                'quantity' => 22,
            ]
        );

        Product::firstOrCreate(
            ['name' => 'Oppo Reno 12'],
            [
                'category_id' => $oppo?->id,
                'thumbnail' => 'images/products/oppo-reno-12.jpg',
                'description' => 'Oppo Reno 12 với thiết kế mỏng nhẹ và camera sắc nét.',
                'price' => 8990000,
                'quantity' => 25,
            ]
        );

        Product::firstOrCreate(
            ['name' => 'Oppo Find X6'],
            [
                'category_id' => $oppo?->id,
                'thumbnail' => 'images/products/oppo-find-x6.jpg',
                'description' => 'Oppo Find X6 hiệu năng mạnh, camera zoom ấn tượng.',
                'price' => 21990000,
                'quantity' => 12,
            ]
        );

        Product::firstOrCreate(
            ['name' => 'Apple AirPods Pro'],
            [
                'category_id' => $apple?->id,
                'thumbnail' => 'images/products/airpods-pro.jpg',
                'description' => 'Tai nghe AirPods Pro chống ồn chủ động và âm thanh cân bằng.',
                'price' => 6490000,
                'quantity' => 40,
            ]
        );
    }
}
