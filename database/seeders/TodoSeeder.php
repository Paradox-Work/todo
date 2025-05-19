<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ToDo;

class TodoSeeder extends Seeder
{
    public function run(): void
    {
        ToDo::factory()->count(20)->create();
    }
}
