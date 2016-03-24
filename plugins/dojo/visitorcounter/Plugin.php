<?php

namespace Dojo\VisitorCounter;

use System\Classes\PluginBase;

class Plugin extends PluginBase {
	public function registerComponents() {
		return [ 
				'Dojo\VisitorCounter\Components\Component' => 'visitorCount' 
		];
	}
	public function registerSettings() {
		return [
				'settings' => [ 
						'label' => 'dojo.visitorcounter::lang.visitorcounter.visitor_count_label',
						'description' => 'dojo.visitorcounter::lang.visitorcounter.visitor_count_setting_label',
						'category' => 'dojo.visitorcounter::lang.plugin.name',
						'icon' => 'icon-cog',
						'class' => 'Dojo\VisitorCounter\Models\Settings',
						'order' => 1000,
						'keywords' => 'dojo.visitorcounter::lang.plugin.name',
						'permissions' => [ 
								'dojo.visitorcounter.access_settings' 
						] 
				] 
		];
	}
}
