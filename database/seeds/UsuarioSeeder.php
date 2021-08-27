<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Amorcito',
            'email' => 'amorcito@amorcito.com',
            'password' => Hash::make('12345678'),
            'url' => 'http://amorcitos.com',
        ]);

        User::create([
            'name' => 'Amorcito2',
            'email' => 'amorcito2@amorcito.com',
            'password' => Hash::make('12345678'),
            'url' => 'http://amorcitos.com',
        ]);

    }
}
