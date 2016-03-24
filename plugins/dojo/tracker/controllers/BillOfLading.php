<?php


namespace Dojo\Tracker\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class BillOfLading extends Controller {
	public $implement = [ 
			'Backend\Behaviors\ListController',
			'Backend\Behaviors\FormController',
			'Backend.Behaviors.RelationController'
	];
	public $listConfig = 'config_list.yaml';
	public $formConfig = 'config_form.yaml';
	public $relationConfig = 'config_relation.yaml';
	
	public $requiredPermissions = [
			'dojo.tracker.access_bill_of_lading'
	];
	
	public function __construct() {
		parent::__construct ();
		BackendMenu::setContext('Dojo.Tracker', 'tracker-menu', 'bill-of-lading-item');
	}
	
	public function formBeforeCreate($model){
		$model->user_id = $this->user->id;
	}
}