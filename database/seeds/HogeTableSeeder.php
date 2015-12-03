<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Models\Eloquent\Hoge;

class HogeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('ja_JP');
        for ($i = 0; $i < 10; $i++) {
            Hoge::create(['body'=>$faker->name()]);
        }
    }
}
