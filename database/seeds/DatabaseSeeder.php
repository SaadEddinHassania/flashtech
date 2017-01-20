<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Traits\Seedable;

class DatabaseSeeder extends Seeder
{
    use Seedable;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(VoyagerDatabaseSeeder::class);
//        $this->seed('SettingsTableSeeder');
//        $this->call(DummySeeder::class);
        $this->call(InitialSeeder::class);

    }
}
