<?php namespace Dojo\Tracker\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * Status Model
 */
class Status extends Model
{

	use Validation;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_tracker_statuses';

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
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
    
    public $attributeNames = [
    		'name' => 'dojo.tracker::lang.tracker.status_name_label',
    ];
    public $rules = [
    		'name' => 'required|unique:dojo_tracker_statuses|max:50',
    ];

}