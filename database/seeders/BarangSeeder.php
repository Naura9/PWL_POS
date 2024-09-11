<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            //Supplier A
            [
                'barang_id' => 1,
                'kategori_id' => 1, 
                'barang_kode' => 'B001',
                'barang_nama' => 'Coca Cola',
                'harga_beli' => 6000,
                'harga_jual' => 7500,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2, 
                'barang_kode' => 'B002',
                'barang_nama' => 'Indomie Goreng',
                'harga_beli' => 2500,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3, 
                'barang_kode' => 'B003',
                'barang_nama' => 'Lays',
                'harga_beli' => 3500,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 4, 
                'barang_kode' => 'B004',
                'barang_nama' => 'Beras',
                'harga_beli' => 74000,
                'harga_jual' => 76000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 5, 
                'barang_kode' => 'B005',
                'barang_nama' => 'Kecap organik',
                'harga_beli' => 14000,
                'harga_jual' => 15000,
            ],

            // Supplier B
            [
                'barang_id' => 6,
                'kategori_id' => 1,
                'barang_kode' => 'B006',
                'barang_nama' => 'Fanta',
                'harga_beli' => 4500,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2, 
                'barang_kode' => 'B007',
                'barang_nama' => 'Ramen',
                'harga_beli' => 4200,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3, 
                'barang_kode' => 'B008',
                'barang_nama' => 'Nabati',
                'harga_beli' => 1200,
                'harga_jual' => 1500,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 4, 
                'barang_kode' => 'B009',
                'barang_nama' => 'Gula',
                'harga_beli' => 13200,
                'harga_jual' => 14000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5, 
                'barang_kode' => 'B010',
                'barang_nama' => 'Beras Organik',
                'harga_beli' => 96000,
                'harga_jual' => 98000,
            ],

            // Supplier C
            [
                'barang_id' => 11,
                'kategori_id' => 1, // Kategori Camilan
                'barang_kode' => 'B011',
                'barang_nama' => 'Sprite',
                'harga_beli' => 5000,
                'harga_jual' => 6000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 2, 
                'barang_kode' => 'B012',
                'barang_nama' => 'Super Bubur',
                'harga_beli' => 5400,
                'harga_jual' => 6000,
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 3, 
                'barang_kode' => 'B013',
                'barang_nama' => 'Keripik Singkong',
                'harga_beli' => 4100,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 4, 
                'barang_kode' => 'B014',
                'barang_nama' => 'Minyak Goreng',
                'harga_beli' => 25700,
                'harga_jual' => 26000,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 5, 
                'barang_kode' => 'B015',
                'barang_nama' => 'Garam Himalaya',
                'harga_beli' => 18700,
                'harga_jual' => 19000,
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}
