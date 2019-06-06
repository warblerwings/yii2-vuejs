<?php

namespace ww\yii2vuejs;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Yii2 VueJsRouter asset bundle
 * Class VueJsRouterAsset
 * @package ww\yii2vuejs
 * @author pratapb <pratap.baniya@gmail.com>
 */
class VueJsRouterAsset extends AssetBundle {

	public $sourcePath = '@bower/vue-router/dist';

	public $js = [
		YII_ENV_DEV ? 'vue-router.js' : 'vue-router.min.js',
	];

	public $jsOptions = [
		'position' => View::POS_END,
	];

	public $depends = [
		'ww\yii2vuejs\VueJsAsset',
	];

}