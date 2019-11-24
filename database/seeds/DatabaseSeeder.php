<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // zuerst die Role-Tabelle füttern ...
      $this->call(RoleTableSeeder::class);
      // ... denn der User benötigt diese Roles
      $this->call(UserTableSeeder::class);
    }
}
