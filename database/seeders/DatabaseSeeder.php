<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Role;
use App\Models\Driver;
use App\Models\Car;
use App\Models\Trip;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->has(Role::factory()->count(1))
            ->count(10)
            ->create();
        Driver::factory()
            ->has(Car::factory()
                ->has(Trip::factory()->count(3))
                ->count(1))
            ->count(10)
            ->create();
        
    }
}
