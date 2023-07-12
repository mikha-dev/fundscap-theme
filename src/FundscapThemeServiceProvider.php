<?php

namespace Fundscap;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class FundscapThemeServiceProvider extends ServiceProvider
{
	protected $type = self::TYPE_THEME;

	protected $css = [
		'css/index.css',
	];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		//
		Admin::baseCss($this->formatAssetFiles($this->css));
	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
