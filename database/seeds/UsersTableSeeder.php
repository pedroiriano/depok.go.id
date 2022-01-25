<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
        $administrator = Role::create(['name' => 'administrator']);

        $agendaPermission= Permission::create(['name' => 'mengelola agenda']);
        $dswPermission= Permission::create(['name' => 'mengelola dsw']);
        $publicationPermission= Permission::create(['name' => 'mengelola pengumuman']);
        $infographicsPermission= Permission::create(['name' => 'mengelola infografis']);
        $contentPermission= Permission::create(['name' => 'mengelola konten']);

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
        
        $admin = User::find(1)->assignRole('administrator');
        $ikp = User::find(2)->assignRole('administrator');
        $humas = User::find(3)->givePermissionTo('mengelola agenda', 'mengelola infografis');

        $administrator->givePermissionTo('mengelola agenda','mengelola dsw', 'mengelola pengumuman', 'mengelola infografis', 'mengelola konten');

    }
}
