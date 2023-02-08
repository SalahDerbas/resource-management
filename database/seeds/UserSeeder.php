<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'department_id' => '',
            'designation_id' => '',
            'image' => '',
            'gender' => '',
            'joining_date' => date('Y-m-d H:i:s'),
            'salary' => 500,
            'facebook' => '',
            'whatsapp' => '',
            'linkedin' => '',
            'phone' => '',

        ]);
    }
}

