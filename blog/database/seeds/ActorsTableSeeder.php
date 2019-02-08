<?php

use Illuminate\Database\Seeder;

use App\Actor;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Actor::create([
            'name' => 'Andrew Lincoln'
        ]);
        Actor::create([
            'name' => 'Norman Reedus'
        ]);
        Actor::create([
            'name' => 'Danai Gurira'
        ]);
        Actor::create([
            'name' => 'Jeffrey Dean Morgan'
        ]);
        Actor::create([
            'name' => 'Melissa McBride'
        ]);
        Actor::create([
            'name' => 'Lauren Cohen'
        ]);
        Actor::create([
            'name' => 'Tom Payne'
        ]);
        Actor::create([
            'name' => 'Ross Marquand'
        ]);
        Actor::create([
            'name' => 'Seth Gilliam'
        ]);
/**********************/
        Actor::create([
            'name' => 'Charlie Hunnam'
        ]);
        Actor::create([
            'name' => 'Katey Sagal'
        ]);
        Actor::create([
            'name' => 'Tomy Flanagan'
        ]);
        Actor::create([
            'name' => 'Ron Perlman'
        ]);
        Actor::create([
            'name' => 'Kim Coates'
        ]);
        Actor::create([
            'name' => 'Theo Rossi'
        ]);
        Actor::create([
            'name' => 'Maggie Siff'
        ]);
        Actor::create([
            'name' => 'Ryan Hurst'
        ]);
        Actor::create([
            'name' => 'Mark Boone Junior'
        ]);
        Actor::create([
            'name' => 'Dayton Callie'
        ]);
        Actor::create([
            'name' => 'David Labrava'
        ]);
        Actor::create([
            'name' => 'Jimmy Smits'
        ]);


        foreach(App\Episode::get() as $episode){
            $episode->actors()->attach(rand(1,21));
        }
    }
}
