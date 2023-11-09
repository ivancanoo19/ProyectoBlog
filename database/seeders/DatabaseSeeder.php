<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;    //Para poder inertar datos al modelo de User
use Illuminate\Support\Facades\Hash;    //Para hacer un mapeo Hash a las contraseñas

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


        /*
        
        Ejecutar solamente una vez el seeder para no tener
        usuarios administradores repetidos...
        
        php artisan db:seed
        */


        User::create([
            'name' => 'cano',
            'email' => 'cano123@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'nat',
            'email' => 'nat123@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
        ]);
    }
}
