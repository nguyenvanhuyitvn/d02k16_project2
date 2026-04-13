<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer1 = User::firstOrCreate(
            ['email' => 'nguyenvana@example.com'],
            [
                'name' => 'Nguyễn Văn A',
                'password' => bcrypt('password'),
            ]
        );

        $product1 = Product::firstOrCreate(
            ['name' => 'Laptop Dell XPS 13'],
            ['description' => 'Laptop hiệu Dell cấu hình chuẩn', 'price' => 20000000, 'quantity' => 10]
        );

        $product2 = Product::firstOrCreate(
            ['name' => 'Chuột không dây Logitech'],
            ['description' => 'Chuột không dây Logitech chất lượng cao', 'price' => 500000, 'quantity' => 20]
        );

        $product3 = Product::firstOrCreate(
            ['name' => 'Bàn phím cơ Corsair K70'],
            ['description' => 'Bàn phím cơ Corsair K70', 'price' => 3500000, 'quantity' => 15]
        );

        $order1Id = DB::table('orders')->insertGetId([
            'user_id' => $customer1->id,
            'order_number' => 'DH-20260330-0001',
            'recipient_name' => 'Nguyễn Văn A',
            'phone' => '0912345678',
            'email' => 'nguyenvana@example.com',
            'shipping_address' => '123 Nguyễn Huệ, Quận 1, TP.HCM, Việt Nam',
            'shipping_note' => 'Giao hàng vào giờ hành chính, đặt trước cửa',
            'status' => 'completed',
            'sub_total' => 24500000,
            'shipping_fee' => 250000,
            'tax' => 2475000,
            'discount_amount' => 0,
            'total' => 27225000,
            'payment_method' => 'COD',
            'created_at' => Carbon::now()->subDays(2),
            'updated_at' => Carbon::now()->subDays(2),
        ]);

        DB::table('order_details')->insert([
            [
                'order_id' => $order1Id,
                'product_id' => $product1->id,
                'product_name' => 'Laptop Dell XPS 13',
                'sku' => 'DELL-XPS-13',
                'unit_price' => 20000000,
                'quantity' => 1,
                'total' => 20000000,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'order_id' => $order1Id,
                'product_id' => $product2->id,
                'product_name' => 'Chuột không dây Logitech',
                'sku' => 'LOG-MOUSE-001',
                'unit_price' => 500000,
                'quantity' => 2,
                'total' => 1000000,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'order_id' => $order1Id,
                'product_id' => $product3->id,
                'product_name' => 'Bàn phím cơ Corsair K70',
                'sku' => 'COR-KB-K70',
                'unit_price' => 3500000,
                'quantity' => 1,
                'total' => 3500000,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
        ]);

        $customer2 = User::firstOrCreate(
            ['email' => 'tranthib@example.com'],
            [
                'name' => 'Trần Thị B',
                'password' => bcrypt('password'),
            ]
        );

        $product4 = Product::firstOrCreate(
            ['name' => 'Tai nghe Sony WH-1000XM4'],
            ['description' => 'Tai nghe Sony chống ồn', 'price' => 850000, 'quantity' => 20]
        );

        $order2Id = DB::table('orders')->insertGetId([
            'user_id' => $customer2->id,
            'order_number' => 'DH-20260330-0002',
            'recipient_name' => 'Trần Thị B',
            'phone' => '0923456789',
            'email' => 'tranthib@example.com',
            'shipping_address' => '456 Lê Lợi, Quận 10, TP.HCM, Việt Nam',
            'shipping_note' => null,
            'status' => 'pending',
            'sub_total' => 850000,
            'shipping_fee' => 30000,
            'tax' => 85000,
            'discount_amount' => 0,
            'total' => 965000,
            'payment_method' => 'Online',
            'created_at' => Carbon::now()->subDay(),
            'updated_at' => Carbon::now()->subDay(),
        ]);

        DB::table('order_details')->insert([
            [
                'order_id' => $order2Id,
                'product_id' => $product4->id,
                'product_name' => 'Tai nghe Sony WH-1000XM4',
                'sku' => 'SONY-WH1000XM4',
                'unit_price' => 850000,
                'quantity' => 1,
                'total' => 850000,
                'created_at' => Carbon::now()->subDay(),
                'updated_at' => Carbon::now()->subDay(),
            ],
        ]);
    }
}
