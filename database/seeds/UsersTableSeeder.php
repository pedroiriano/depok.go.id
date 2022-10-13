<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'Adminstrator',
            'email' => 'admin@depok.go.id',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Admin IKP',
            'email' => 'ikp@depok.go.id',
            'password' => bcrypt('Awe@qwsKhZtE'),
        ]);
        DB::table('users')->insert([
            'name' => 'Admin Humas',
            'email' => 'humas@depok.go.id',
            'password' => bcrypt('password'),
        ]);
    }
}
