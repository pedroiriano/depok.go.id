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
        $superadmin = Role::create(['name' => 'super-admin']);
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
        
        $admin = User::find(1)->assignRole('super-admin');
        $ikp = User::find(2)->assignRole('super-admin');
        $humas = User::find(3)->assignRole('administrator');

        $superadmin->givePermissionTo(['manage agenda','manage dsw', 'manage publication', 'manage infographics', 'manage content']);

        $humas->givePermissionTo(['manage agenda','manage infographics']);

    }
}
