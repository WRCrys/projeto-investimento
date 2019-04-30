<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf'           => '11122233355', 
            'name'          => 'Connor', 
            'phone'         => '4656978152', 
            'birth'         => '1995-06-09', 
            'gender'        => 'M', 
            'email'         => 'crystyano@teste.com', 
            'password'      => env('PASSWORD_HASH') ? bcrypt('123456') : '123456',
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
