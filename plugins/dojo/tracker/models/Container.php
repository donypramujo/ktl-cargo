<?php namespace Dojo\Tracker\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * Container Model
 */
class Container extends Model
{
	use Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_tracker_containers';

    protected $touches = ['bill_of_lading'];
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
    		'bill_of_lading' => 'Dojo\Tracker\Models\BillOfLading'
    ];
    
    public $attributeNames = [
    		'container_number' => 'dojo.tracker::lang.tracker.container_number_label',
    		'seal_number' => 'dojo.tracker::lang.tracker.seal_number_label',
    ];
    public $rules = [
    		'container_number' => 'required|max:50',
    		'seal_number' => 'required|max:50',
    ];

}