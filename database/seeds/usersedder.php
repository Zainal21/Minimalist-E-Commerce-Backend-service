<?php

use Illuminate\Database\Seeder;
use App\User;

class usersedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Zainal Arifin',
            'email' => 'Admin@admin.com',
            'password' => bcrypt('admin123')
        ]);
    }
}
