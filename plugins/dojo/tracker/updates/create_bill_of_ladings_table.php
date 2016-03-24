<?php namespace Dojo\Tracker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateBillOfLadingsTable extends Migration
{

    public function up()
    {
        Schema::create('dojo_tracker_bill_of_ladings', function($table)
        {
            $table->engine = 'InnoDB';
           	$table->increments('id')->unsigned();
            $table->string('bill_of_lading_number', 20)->unique();
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->string('feeder_vessel',20);
            $table->string('mother_vessel',20);

            $table->integer('origin_id')->unsigned();
            $table->foreign('origin_id')->references('id')->on('dojo_tracker_locations');
            
            $table->integer('destination_id')->unsigned();
            $table->foreign('destination_id')->references('id')->on('dojo_tracker_locations');
            
            $table->string('shipper',50);
            $table->string('consignee',50);
            
            $table->date('date_of_shipment');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dojo_tracker_bill_of_ladings');
    }

}