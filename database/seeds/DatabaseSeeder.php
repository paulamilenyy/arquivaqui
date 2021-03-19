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
        // $this->call(UserSeeder::class);
        //$this->call(ChequeSeeder::class);
        //\App\Models\Cheque::factory(10)->create();
        factory('App\User',10)->create();

    }
}
