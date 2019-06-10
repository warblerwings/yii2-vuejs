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
class VueJsAllAsset extends AssetBundle {

	public $sourcePath = '@bower/vue/dist';

	public $js = [
		YII_ENV_DEV ? 'vue.js' : 'vue.min.js',
	];

	public $jsOptions = [
		'position' => View::POS_END,
	];

	public $depends = [
		'ww\yii2vuejs\AxiosAsset',
		'ww\yii2vuejs\VueJsModalAsset',
		'ww\yii2vuejs\VueJsRouterAsset',
		'ww\yii2vuejs\VueJsResourceAsset',
	];

}