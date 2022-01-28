<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesAndPermissionTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(KecamatanTableSeeder::class);
        $this->call(KelurahanTableSeeder::class);
        $this->call(ContentTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(SejarahTableSeeder::class);
        $this->call(AgendasTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(InfografisTableSeeder::class);
        $this->call(OPDTableSeeder::class);
    }
}
