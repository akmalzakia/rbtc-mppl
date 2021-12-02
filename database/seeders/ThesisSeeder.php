<?php

namespace Database\Seeders;

use App\Models\Thesis;
use Illuminate\Database\Seeder;

class ThesisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Thesis::factory()
            ->category_seq()
            ->count(20)
            ->create();
    }
}
