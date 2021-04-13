<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mahasiswa_matakuliah extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nilai = [
            [
                'mahasiswa_nim' => '1941720044',
                'matakuliah_id' => 1,
                'nilai' => 'A',
            ],
            [
                'mahasiswa_nim' => '1941720044',
                'matakuliah_id' => 2,
                'nilai' => 'A',
            ]
            ];
            DB::table('mahasiswa_matakuliah')->insert($nilai);
    }
}
