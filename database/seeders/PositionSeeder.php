<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'title' => 'Guru',
                'notes' => 'Jabatan Guru'
            ],
            [
                'title' => 'Pelajar',
                'notes' => 'Siswa/Pelajar'
            ]
        ])->each(function ($position) {
            Position::create($position);
        });
    }
}
