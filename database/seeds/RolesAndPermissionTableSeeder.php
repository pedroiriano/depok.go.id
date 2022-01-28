<?php

use Illuminate\Database\Seeder;

class RolesAndPermissionTableSeeder extends Seeder
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

        $agendaPermission = Permission::create(['name' => 'mengelola agenda']);
        $dswPermission = Permission::create(['name' => 'mengelola dsw']);
        $publicationPermission = Permission::create(['name' => 'mengelola pengumuman']);
        $infographicsPermission = Permission::create(['name' => 'mengelola infografis']);
        $contentPermission = Permission::create(['name' => 'mengelola konten']);

        $admin = User::find(1)->assignRole('administrator');
        $ikp = User::find(2)->assignRole('administrator');
        $humas = User::find(3)->givePermissionTo('mengelola agenda', 'mengelola infografis');

        $administrator->givePermissionTo('mengelola agenda', 'mengelola dsw', 'mengelola pengumuman', 'mengelola infografis', 'mengelola konten');
    }
}
