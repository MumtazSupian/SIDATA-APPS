<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'nis' => '20240001',
                'name' => 'Ahmad Fauzan',
                'rombel' => 'RPL X-1',
                'rayon' => 'Cicurug 1',
                'profile' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nis' => '20240002',
                'name' => 'Dina Putri',
                'rombel' => 'RPL X-1',
                'rayon' => 'Cicurug 2',
                'profile' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nis' => '20240003',
                'name' => 'Rizky Maulana',
                'rombel' => 'RPL X-2',
                'rayon' => 'Cicurug 1',
                'profile' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
