<?php

namespace Dojo\Tracker\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * BillOfLading Model
 */
class BillOfLading extends Model {
	
	use Validation;
	/**
	 *
	 * @var string The database table used by the model.
	 */
	public $table = 'dojo_tracker_bill_of_ladings';
	protected $primaryKey = 'id';
	
	/**
	 *
	 * @var array Guarded fields
	 */
	protected $guarded = [ 
			'*' 
	];
	
	/**
	 *
	 * @var array Fillable fields
	 */
	protected $fillable = [ ];
	
	/**
	 *
	 * @var array Relations
	 */
	public $hasMany = [
		'containers' => ['Dojo\Tracker\Models\Container']	,	
		'statuses' => ['Dojo\Tracker\Models\BillOfLadingStatus']	,
	];
	public $belongsTo = [ 
			'origin' => 'Dojo\Tracker\Models\Location',
			'destination' => 'Dojo\Tracker\Models\Location' 
	];
	
	public $attributeNames = [ 
			'bill_of_lading_number' => 'dojo.tracker::lang.tracker.bill_of_lading_number_label',
			'date_of_shipment' => 'dojo.tracker::lang.tracker.date_of_shipment_label',
			'feeder_vessel' => 'dojo.tracker::lang.tracker.feeder_vessel_label',
			'mother_vessel' => 'dojo.tracker::lang.tracker.mother_vessel_label',
			'origin' => 'dojo.tracker::lang.tracker.origin_label',
			'destination' => 'dojo.tracker::lang.tracker.destination_label',
			'shipper' => 'dojo.tracker::lang.tracker.shipper_label',
			'consignee' => 'dojo.tracker::lang.tracker.consignee_label',
			'containers' => 'dojo.tracker::lang.tracker.containers_label',
	];
	public $rules = [ 
			'bill_of_lading_number' => 'required|unique:dojo_tracker_bill_of_ladings|max:20',
			'date_of_shipment' => 'required|date',
			'feeder_vessel' => 'required|max:20',
			'mother_vessel' => 'required|max:20',
			'origin' => 'required',
			'destination' => 'required',
			'shipper' => 'required',
			'consignee' => 'required',
	];
	public function filterFields($fields, $context = null) {
		if ($context === 'update') {
			$fields->bill_of_lading_number->disabled = true;
		}
	}
}