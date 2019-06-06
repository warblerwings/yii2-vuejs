<?php

namespace ww\yii2vuejs;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Yii2 VueJsResource asset bundle
 * Class VueJsResourceAsset
 * @package ww\yii2vuejs
 * @author pratapb <pratap.baniya@gmail.com>
 */
class VueJsResourceAsset extends AssetBundle {

	public $sourcePath = '@bower/vue-resource/dist';

	public $js = [
		YII_ENV_DEV ? 'vue-resource.js' : 'vue-resource.min.js',
	];

	public $jsOptions = [
		'position' => View::POS_END,
	];

	public $depends = [
		'ww\yii2vuejs\VueJsAsset',
	];

}