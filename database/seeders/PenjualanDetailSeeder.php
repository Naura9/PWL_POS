<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Transaksi Penjualan 1
            [
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 7500,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 2,
                'harga' => 3000,
                'jumlah' => 5,
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 3,
                'harga' => 4000,
                'jumlah' => 3,
            ],

            // Transaksi Penjualan 2
            [
                'penjualan_id' => 2,
                'barang_id' => 4,
                'harga' => 76000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 5,
                'harga' => 15000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 6,
                'harga' => 5000,
                'jumlah' => 6,
            ],

            // Transaksi Penjualan 3
            [
                'penjualan_id' => 3,
                'barang_id' => 7,
                'harga' => 5000,
                'jumlah' => 4,
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 8,
                'harga' => 1500,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 9,
                'harga' => 14000,
                'jumlah' => 2,
            ],

            // Transaksi Penjualan 4
            [
                'penjualan_id' => 4,
                'barang_id' => 10,
                'harga' => 98000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 11,
                'harga' => 6000,
                'jumlah' => 3,
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 12,
                'harga' => 6000,
                'jumlah' => 5,
            ],

            // Transaksi Penjualan 5
            [
                'penjualan_id' => 5,
                'barang_id' => 13,
                'harga' => 5000,
                'jumlah' => 8,
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 14,
                'harga' => 26000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 15,
                'harga' => 19000,
                'jumlah' => 4,
            ],

            // Transaksi Penjualan 6
            [
                'penjualan_id' => 6,
                'barang_id' => 1,
                'harga' => 7500,
                'jumlah' => 5,
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 2,
                'harga' => 3000,
                'jumlah' => 7,
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 3,
                'harga' => 4000,
                'jumlah' => 3,
            ],

            // Transaksi Penjualan 7
            [
                'penjualan_id' => 7,
                'barang_id' => 4,
                'harga' => 76000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 5,
                'harga' => 15000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 6,
                'harga' => 5000,
                'jumlah' => 10,
            ],

            // Transaksi Penjualan 8
            [
                'penjualan_id' => 8,
                'barang_id' => 7,
                'harga' => 5000,
                'jumlah' => 6,
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 8,
                'harga' => 1500,
                'jumlah' => 8,
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 9,
                'harga' => 14000,
                'jumlah' => 5,
            ],

            // Transaksi Penjualan 9
            [
                'penjualan_id' => 9,
                'barang_id' => 10,
                'harga' => 98000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 11,
                'harga' => 6000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 12,
                'harga' => 6000,
                'jumlah' => 7,
            ],

            // Transaksi Penjualan 10
            [
                'penjualan_id' => 10,
                'barang_id' => 13,
                'harga' => 5000,
                'jumlah' => 9,
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 14,
                'harga' => 26000,
                'jumlah' => 4,
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 15,
                'harga' => 19000,
                'jumlah' => 2,
            ],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}
