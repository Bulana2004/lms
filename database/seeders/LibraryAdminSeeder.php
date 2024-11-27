<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LibraryAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hash_password = Hash::make(config('lms.admin_password'));

        DB::table('users')->insert([
            'name' => 'admin',
            'password' => $hash_password,
            'user_types' => 3 ,
            'idno' => 200418501010,
            'address' => 'Kamkanamge Waththa Panagamuwa Wanchawala',
            'birthday' => '2004/07/03',
            'is_admin' => true,
            'is_active' => true,
            'telno' => '0768639273'
        ]);
    }
}
