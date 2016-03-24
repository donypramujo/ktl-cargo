<?php 
use Dojo\Tracker\Models\BillOfLading;class Cms56f37b8dec604_666997067Class extends \Cms\Classes\PageCode
{



public function onStart(){
  $bl_no = post('bl_no');

  $this['bl'] = BillOfLading::where('bill_of_lading_number',$bl_no)->first();


}

}
