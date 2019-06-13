<?php

namespace ww\yii2vuejs;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Yii2 Vuex asset bundle
 * Class VuexAsset
 * @package ww\yii2vuejs
 * @author pratapb <pratap.baniya@gmail.com>
 */
class VuexAsset extends AssetBundle {

	public $sourcePath = '@bower/vuex/dist';

	public $js = [
		'index.js',
	];

	public $js = [
		YII_ENV_DEV ? 'vuex.js' : 'vuex.min.js',
	];


	public $depends = [
		'ww\yii2vuejs\VueJsAsset',
	];

}