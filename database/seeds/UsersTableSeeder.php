<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Role
        Role::create(['name' => 'administrator']);
        Role::create(['name' => 'agenda']);

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
        
        User::find(1)->assignRole('administrator');
        User::find(2)->assignRole('administrator');
        User::find(3)->assignRole('agenda');
    }
}
