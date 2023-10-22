<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            [
                'name' => 'Basic',
                'price' => 99900,
                'max_days' => 7,
                'max_users' => 1,
                'is_download' => 0,
                'is_4k' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Standard',
                'price' => 249900,
                'max_days' => 30,
                'max_users' => 2,
                'is_download' => 1,
                'is_4k' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Premium',
                'price' => 399900,
                'max_days' => 60,
                'max_users' => 5,
                'is_download' => 1,
                'is_4k' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
