<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('criterias')->insert([
            [
                'nama' => 'Bersifat Mendidik',
                'tipe' => 'benefit',
                'bobot1' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Menghibur',
                'tipe' => 'benefit',
                'bobot2' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Bersifat kreatif',
                'tipe' => 'benefit',
                'bobot3' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Mengandung Kekerasan',
                'tipe' => 'cost',
                'bobot4' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Mengandung Kata-Kata Kasar',
                'tipe' => 'cost',
                'bobot5' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Mengandung Unsur Pornografi',
                'tipe' => 'cost',
                'bobot6' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Kualitas Tayangan',
                'tipe' => 'benefit',
                'bobot7' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],[
                'nama' => 'Ketersidaan Opsi Bahasa',
                'tipe' => 'cost',
                'bobot8' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],[
                'nama' => 'Durasi Tayang',
                'tipe' => 'benefit',
                'bobot9' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'nama' => 'Menambah Wawasan',
                'tipe' => 'benefit',
                'bobot10' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
