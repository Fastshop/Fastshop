<?php

namespace App\Dev\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DevDatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}
