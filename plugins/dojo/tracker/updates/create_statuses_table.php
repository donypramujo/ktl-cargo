<?php namespace Dojo\Tracker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateStatusesTable extends Migration
{

    public function up()
    {
        Schema::create('dojo_tracker_statuses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name',50)->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dojo_tracker_statuses');
    }

}
