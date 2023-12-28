<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Monitoring;
use App\Models\Control;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Bagus Budi Satoto',
            'username' => 'bagussatoto',
            'email' => 'bagussatoto@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Monitoring::create([
            'notification' => false, 
            'temperature' => 0,
            'turbidity' => 0,
            'ph' => 0,
            'jarak' => 0,
            'pompa_masuk' => 'Hidup',
            'pompa_keluar' => 'Mati',
        ]);

        Control::factory(24)->create();

    }
}
