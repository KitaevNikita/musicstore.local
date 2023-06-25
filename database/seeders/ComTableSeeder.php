<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Com;

class ComTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Com::factory()
            ->count(5)
            ->create();
    }
}
