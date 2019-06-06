<?php

namespace ww\yii2vuejs;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Yii2 VueJs asset bundle
 * Class VueJsAsset
 * @package ww\yii2vuejs
 * @author pratapb <pratap.baniya@gmail.com>
 */
class VueJsAsset extends AssetBundle {

	public $sourcePath = '@bower/vue/dist';

	public $js = [
		YII_ENV_DEV ? 'vue.js' : 'vue.min.js',
	];

	public $jsOptions = [
		'position' => View::POS_END,
	];

}