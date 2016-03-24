<?php namespace Dojo\Tracker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateBillOfLadingStatusesTable extends Migration
{

    public function up()
    {
        Schema::create('dojo_tracker_bill_of_lading_statuses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('bill_of_lading_id')->unsigned()->nullable();
            $table->foreign('bill_of_lading_id')->references('id')->on('dojo_tracker_bill_of_ladings')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('location_id')->unsigned()->nullable();
            $table->foreign('location_id')->references('id')->on('dojo_tracker_locations');
            
            $table->integer('status_id')->unsigned()->nullable();
            $table->foreign('status_id')->references('id')->on('dojo_tracker_statuses');
            
            $table->date('updated_date');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dojo_tracker_bill_of_lading_statuses');
    }

}
