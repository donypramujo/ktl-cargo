<?php namespace Dojo\Tracker\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * BillOfLadingStatus Model
 */
class BillOfLadingStatus extends Model
{
	use Validation;
	
	/**

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_tracker_bill_of_lading_statuses';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $belongsTo = [
    		'bill_of_lading' => 'Dojo\Tracker\Models\BillOfLading',
    		'location' => 'Dojo\Tracker\Models\Location',
    		'status' => 'Dojo\Tracker\Models\Status'
    ];
    
    public $attributeNames = [
    		'updated_date' => 'dojo.tracker::lang.tracker.updated_date_label',
    		'location' => 'dojo.tracker::lang.tracker.location_label',
    		'status' => 'dojo.tracker::lang.tracker.status_label',
    ];
    public $rules = [
    		'updated_date' => 'required|date',
    		'location' => 'required',
    		'status' => 'required',
    ];

}