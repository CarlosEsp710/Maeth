<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permissions list

        // Blog - Posts
        Permission::create(['name' => 'posts.all']);
        // Patient Profile
        Permission::create(['name' => 'patient.profile.index']);
        Permission::create(['name' => 'patient.profile.edit']);
        Permission::create(['name' => 'patient.profile.show']);
        Permission::create(['name' => 'patient.profile.destroy']);
        // Nutritionist Profile
        Permission::create(['name' => 'nutritionist.profile.index']);
        Permission::create(['name' => 'nutritionist.profile.edit']);
        Permission::create(['name' => 'nutritionist.profile.show']);
        Permission::create(['name' => 'nutritionist.profile.destroy']);
        // Patient - MyNutritionist
        Permission::create(['name' => 'patient.my_nutritionist.index']);
        // Nutritionist - MyPatients
        Permission::create(['name' => 'nutritionist.my_patients.index']);
        // Patient - Medical history
        Permission::create(['name' => 'patient.medical_history.index']);

        /**
         * TODO
         *  -Agregar los permisos faltantes-
         */

        $patient = Role::create(['name' => 'Patient']);
        $patient->givePermissionTo([
            // Blog - Posts
            'posts.all',
            // Patient Profile
            'patient.profile.index',
            'patient.profile.edit',
            'patient.profile.show',
            'patient.profile.destroy',
            //Patient - MyNutritionist
            'patient.my_nutritionist.index',
            //Patient - MedicalHistory
            'patient.medical_history.index'
        ]);

        $nutritionist = Role::create(['name' => 'Nutritionist']);
        $nutritionist->givePermissionTo([
            // Blog - Posts
            'posts.all',
            // Nutritionist Profile
            'nutritionist.profile.index',
            'nutritionist.profile.edit',
            'nutritionist.profile.show',
            'nutritionist.profile.destroy',
            // Nutritionist - MyPatients
            'nutritionist.my_patients.index'
        ]);

        $userPatient1 = User::find(1);
        $userPatient1->assignRole('Patient');

        $userPatient2 = User::find(2);
        $userPatient2->assignRole('Patient');

        $userNutritionist = User::find(3);
        $userNutritionist->assignRole('Nutritionist');
    }
}
