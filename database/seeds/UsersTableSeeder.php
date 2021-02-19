<?php

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
        DB::table('users')->delete();

        DB::table('users')->insert([
            [
                'name' => 'Adminstrator',
                'email' => 'admin@depok.go.id',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Panitia PDAM',
                'email' => 'panitia-pdam@depok.go.id',
                'password' => bcrypt('pdambersahabat'),
            ],
            [
                'name' => 'Admin IKP',
                'email' => 'ikp@depok.go.id',
                'password' => bcrypt('Awe@qwsKhZtE'),
            ],
        ]);
    }
}
