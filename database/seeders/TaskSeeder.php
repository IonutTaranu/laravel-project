<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run()
    {
        Task::create([
            'title' => 'Primul task',
            'description' => 'Acesta este primul task',
            'completed' => false,
        ]);
        
    }
}

