<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Seeder;
use App\Models\User;
=======
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
>>>>>>> 81769701ce423ebdbd2a61e9092da94b46abdb49

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // ✅ Cream un user de test
=======
        // User::factory(10)->create();

>>>>>>> 81769701ce423ebdbd2a61e9092da94b46abdb49
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
<<<<<<< HEAD

        // ✅ Rulăm seederul pentru Task-uri
        $this->call([
            TaskSeeder::class,
        ]);
    }
}

=======
    }
}
>>>>>>> 81769701ce423ebdbd2a61e9092da94b46abdb49
