<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now(); // carbon untuk mendapatkan waktu saat ini

        $data = [
            // Stok barang dari Supplier A
            [
                'stok_id' => 1,
                'supplier_id' => 1,
                'barang_id' => 1, // Coca Cola
                'user_id' => 1, 
                'stok_tanggal' => $now,
                'stok_jumlah' => 50,
            ],
            [
                'stok_id' => 2,
                'supplier_id' => 1,
                'barang_id' => 2, // Indomie Goreng
                'user_id' => 1,
                'stok_tanggal' => $now,
                'stok_jumlah' => 150,
            ],
            [
                'stok_id' => 3,
                'supplier_id' => 1,
                'barang_id' => 3, // Lays
                'user_id' => 1,
                'stok_tanggal' => $now,
                'stok_jumlah' => 80,
            ],
            [
                'stok_id' => 4,
                'supplier_id' => 1,
                'barang_id' => 4, // Beras
                'user_id' => 1,
                'stok_tanggal' => $now,
                'stok_jumlah' => 60,
            ],
            [
                'stok_id' => 5,
                'supplier_id' => 1,
                'barang_id' => 5, // Kecap Organik
                'user_id' => 1,
                'stok_tanggal' => $now,
                'stok_jumlah' => 40,
            ],

            // Stok barang dari Supplier B
            [
                'stok_id' => 6,
                'supplier_id' => 2,
                'barang_id' => 6, // Fanta
                'user_id' => 2, 
                'stok_tanggal' => $now,
                'stok_jumlah' => 120,
            ],
            [
                'stok_id' => 7,
                'supplier_id' => 2,
                'barang_id' => 7, // Ramen
                'user_id' => 2,
                'stok_tanggal' => $now,
                'stok_jumlah' => 200,
            ],
            [
                'stok_id' => 8,
                'supplier_id' => 2,
                'barang_id' => 8, // Nabati
                'user_id' => 1,
                'stok_tanggal' => $now,
                'stok_jumlah' => 300,
            ],
            [
                'stok_id' => 9,
                'supplier_id' => 2,
                'barang_id' => 9, // Gula
                'user_id' => 1,
                'stok_tanggal' => $now,
                'stok_jumlah' => 100,
            ],
            [
                'stok_id' => 10,
                'supplier_id' => 2,
                'barang_id' => 10, // Beras Organik
                'user_id' => 2,
                'stok_tanggal' => $now,
                'stok_jumlah' => 70,
            ],

            // Stok barang dari Supplier C
            [
                'stok_id' => 11,
                'supplier_id' => 3,
                'barang_id' => 11, // Sprite
                'user_id' => 3, 
                'stok_tanggal' => $now,
                'stok_jumlah' => 60,
            ],
            [
                'stok_id' => 12,
                'supplier_id' => 3,
                'barang_id' => 12, // Super Bubur
                'user_id' => 1,
                'stok_tanggal' => $now,
                'stok_jumlah' => 150,
            ],
            [
                'stok_id' => 13,
                'supplier_id' => 3,
                'barang_id' => 13, // Keripik Singkong
                'user_id' => 3,
                'stok_tanggal' => $now,
                'stok_jumlah' => 80,
            ],
            [
                'stok_id' => 14,
                'supplier_id' => 3,
                'barang_id' => 14, // Minyak Goreng
                'user_id' => 3,
                'stok_tanggal' => $now,
                'stok_jumlah' => 90,
            ],
            [
                'stok_id' => 15,
                'supplier_id' => 3,
                'barang_id' => 15, // Garam Himalaya
                'user_id' => 1,
                'stok_tanggal' => $now,
                'stok_jumlah' => 110,
            ],
        ];

        DB::table('t_stok')->insert($data);
    }
}
