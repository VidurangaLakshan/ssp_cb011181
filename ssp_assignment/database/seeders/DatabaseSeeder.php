<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => 1,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => bcrypt('test'),
            'role' => 2,
        ]);

//        \App\Models\VehicleBrand::factory()->create([
//            'brand' => 'Toyota',
//        ]);
//
//        \App\Models\VehicleBrand::factory()->create([
//            'brand' => 'Nissan',
//        ]);
//
//        \App\Models\VehicleBrand::factory()->create([
//            'brand' => 'Honda',
//        ]);
//
//        \App\Models\VehicleBrand::factory()->create([
//            'brand' => 'Suzuki',
//        ]);
//
//        \App\Models\VehicleModel::factory()->create([
//            'model' => 'Corolla',
//        ]);
//
//        \App\Models\VehicleModel::factory()->create([
//            'model' => 'Wagon R',
//        ]);
//
//        \App\Models\VehicleModel::factory()->create([
//            'model' => 'N Wagon',
//        ]);
//
//        \App\Models\VehicleModel::factory()->create([
//            'model' => 'N Box',
//        ]);
//
//        \App\Models\VehicleModel::factory()->create([
//            'model' => 'Fit',
//        ]);
//
//
//        \App\Models\VehicleModel::factory()->create([
//            'model' => 'X Trail',
//        ]);
//
//        \App\Models\VehicleModel::factory()->create([
//            'model' => 'Leaf',
//        ]);
//
//        \App\Models\VehicleYear::factory()->create([
//            'year' => '2023',
//        ]);
//
//        \App\Models\VehicleYear::factory()->create([
//            'year' => '2022',
//        ]);
//
//        \App\Models\VehicleYear::factory()->create([
//            'year' => '2021',
//        ]);
    }
}
