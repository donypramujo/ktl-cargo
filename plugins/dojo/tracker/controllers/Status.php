<?php namespace Dojo\Tracker\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Status extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'dojo.tracker.access_status' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dojo.Tracker', 'tracker-menu', 'status-list-menu-item');
    }
}