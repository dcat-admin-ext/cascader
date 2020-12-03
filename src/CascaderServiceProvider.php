<?php

namespace DcatAdminExt\Cascader;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class CascaderServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/cascader.js',
    ];
	protected $css = [
		'css/cascader.css',
	];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		//

	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
