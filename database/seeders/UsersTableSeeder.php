<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Carlos Espejel Salazar',
            'email' => 'carlos@patient.com',
            'password' => bcrypt('secret')
        ])->patientProfile()->save(\App\Models\PatientProfile::make());

        \App\Models\User::factory()->create([
            'name' => 'Fortino Pérez Zárate',
            'email' => 'fortino@patient.com',
            'password' => bcrypt('secret')
        ])->patientProfile()->save(\App\Models\PatientProfile::make());

        \App\Models\User::factory(10)->create()
            ->each(function ($user) {
                $profile = $user->nutritionistProfile()->save(\App\Models\NutritionistProfile::factory()->make());
            });
    }
}
