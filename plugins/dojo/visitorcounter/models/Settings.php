<?php namespace Dojo\VisitorCounter\Models;

use Model;

/**
 * Settings Model
 */
class Settings extends Model
{
	public $implement = ['System.Behaviors.SettingsModel'];
   	public $settingsCode = 'dojo_visitorcounter_settings';
   	public $settingsFields = 'fields.yaml';

}