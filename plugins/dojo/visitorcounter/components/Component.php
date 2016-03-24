<?php namespace Dojo\VisitorCounter\Components;

use Cms\Classes\ComponentBase;
use Dojo\VisitorCounter\Models\Settings;
use Session;

class Component extends ComponentBase
{

   public function componentDetails()
    {
        return [
            'name'        => 'dojo.visitorcounter::lang.plugin.name',
            'description' => 'dojo.visitorcounter::lang.plugin.name'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
	
	public function onRun()
	{	
		$visitorCount = Settings::get('visitor_count');
		if(!Session::has('visited')){	
			Session::put('visited',TRUE);
			$visitorCount = $visitorCount + 1;
			Settings::set('visitor_count', $visitorCount);	
		}
		$this->page['visitorCount'] = $visitorCount; 
	}

}