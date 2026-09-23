<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suppliers = [
            [
                'name'    => 'PT. Indofood Sukses Makmur',
                'phone'   => '021-57958822',
                'address' => 'Sudirman Plaza, Jl. Jend. Sudirman Kav. 76-78, Jakarta',
            ],
            [
                'name'    => 'PT. Unilever Indonesia',
                'phone'   => '021-52991000',
                'address' => 'Graha Unilever, Jl. Gatot Subroto Kav. 15, Jakarta',
            ],
            [
                'name'    => 'PT. Mayora Indah',
                'phone'   => '021-5679330',
                'address' => 'Gedung Mayora, Jl. Tomang Raya No. 21-23, Jakarta',
            ],
        ];

        foreach ($suppliers as $supplier) {
            DB::table('suppliers')->insert([
                'name'       => $supplier['name'],
                'phone'      => $supplier['phone'],
                'address'    => $supplier['address'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}