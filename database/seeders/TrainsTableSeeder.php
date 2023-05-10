<?php

namespace Database\Seeders;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for($i = 0; $i < 50; $i++) {

        $table = new Train ();
        
        
        $table->Brand= $faker->company(); 
        $table->from= $faker->city();
        $table->to= $faker->city();
        $table->from_time=$faker->dateTimeBetween('-1 week', '+1 week');
        $table->to_time=Carbon::parse($table->from_time)->addHours(rand(1, 23));
        $table->code_train= $faker->bothify('??###');
        $table->carriage_number= $faker->numberBetween(0,10);
        $table->on_time= $faker->boolean(20);
        $table->offset= $faker->boolean();

        
        $table-> save();
    }
    }
}
