<?php namespace Dojo\Tracker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateContainersTable extends Migration
{

    public function up()
    {
        Schema::create('dojo_tracker_containers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('bill_of_lading_id')->unsigned()->nullable();
            $table->foreign('bill_of_lading_id')->references('id')->on('dojo_tracker_bill_of_ladings')->onDelete('cascade')->onUpdate('cascade');
            $table->string('container_number',50);
            $table->string('seal_number',50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dojo_tracker_containers');
    }

}
