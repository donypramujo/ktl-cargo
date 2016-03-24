<?php namespace RainLab\Blog\Updates;

use October\Rain\Database\Updates\Seeder;
use Dojo\Tracker\Models\Status;

class SeedAllTables extends Seeder
{

    public function run()
    {
    	Status::create(['name'=>'On Transit']);
    	Status::create(['name'=>'On Process']);
    	Status::create(['name'=>'On Sail']);
    	Status::create(['name'=>'Received on Destination']);
    	Status::create(['name'=>'Delivered']);
    }

}
