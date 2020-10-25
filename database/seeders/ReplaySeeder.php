<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Replay;

class ReplaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Replay::factory()->count(30)->create();
    }
}
