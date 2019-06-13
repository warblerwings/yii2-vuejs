<?php

namespace ww\yii2vuejs;

use yii\web\AssetBundle;

/**
 * Yii2 Bootstrap4 asset bundle
 * Class Bootstrap4
 * @package ww\yii2vuejs
 * @author pratapb <pratap.baniya@gmail.com>
 */
class Bootstrap4 extends AssetBundle {

	public $sourcePath = '@bower/bootstrap4/dist';

	public $css = [
		YII_ENV_DEV ? 'css/bootstrap.css' : 'css/bootstrap.min.css',
	];

	public $js = [
		YII_ENV_DEV ? 'css/bootstrap.js' : 'js/bootstrap.min.css',
	];

}
