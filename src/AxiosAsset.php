<?php

namespace ww\yii2vuejs;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Yii2 Axios asset bundle
 * Class AxiosAsset
 * @package ww\yii2vuejs
 * @author pratapb <pratap.baniya@gmail.com>
 */
class AxiosAsset extends AssetBundle {

	public $sourcePath = '@bower/axios/dist';

	public $js = [
		YII_ENV_DEV ? 'axios.js' : 'axios.min.js',
	];

	public $jsOptions = [
		'position' => View::POS_END,
	];

}