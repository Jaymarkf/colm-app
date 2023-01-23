<?php

namespace Database\Seeders;
use App\Models\AdminLogin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        AdminLogin::create([
            'username' => 'admin',
            'password' => md5('admin')
        ]);
    }
}
