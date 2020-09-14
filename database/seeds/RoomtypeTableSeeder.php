<?php

use Illuminate\Database\Seeder;

class RoomtypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Roomtype::class, 5)->create();
    }
}
