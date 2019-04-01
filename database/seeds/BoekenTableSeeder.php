<?php

use Illuminate\Database\Seeder;

class BoekenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Boeken::class, 50)->create();
    }
}
