<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('doctors')->insert([
    [
        'name' => 'Nate Baston',
        'specialty' => 'General Principal',
        'phone' => '774-020-0120',
        'email' => 'nate01@company.com',
        'image' => 'team-image1.jpg'
    ],
    [
        'name' => 'Jason Stewart',
        'specialty' => 'Pregnancy',
        'phone' => '751-070-0170',
        'email' => 'jason21@company.com',
        'image' => 'team-image2.jpg'
    ]
]);

    }
    }