<?php namespace Dojo\Tracker\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Location extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'dojo.tracker.access_location' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dojo.Tracker', 'tracker-menu', 'location-menu-item');
    }
}