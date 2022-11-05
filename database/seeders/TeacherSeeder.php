<?php

namespace Database\Seeders;

use App\Models\Tearcher;
use Database\Factories\TeacherFactory;
use Illuminate\Database\Seeder;


class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tearcher::factory()->count(20)->create();
    }
}
