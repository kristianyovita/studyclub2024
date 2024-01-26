<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class mahasiswa_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            'nim'=>'f1e122145',
            'nama'=>'kristian yovita',
            'kelas'=>'r005',
            'des'=>'peserta 1'
        ]);

        DB::table('mahasiswa')->insert([
            'nim'=>'f1e122',
            'nama'=>'aurelia',
            'kelas'=>'r005',
            'des'=>'peserta 2'
        ]);

        DB::table('mahasiswa')->insert([
            'nim'=>'f1e122101',
            'nama'=>'widia',
            'kelas'=>'r005',
            'des'=>'peserta 3'
        ]);
    }
}


