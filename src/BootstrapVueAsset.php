<?php

namespace ww\yii2vuejs;

use yii\web\AssetBundle;

/**
 * Yii2 Bootstrap4 asset bundle
 * Class Bootstrap4
 * @package ww\yii2vuejs
 * @author pratapb <pratap.baniya@gmail.com>
 */
class BootstrapVueAsset extends AssetBundle {

	public $sourcePath = '@npm/bootstrap-vue/dist';

	public $css = [
		YII_ENV_DEV ? 'css/bootstrap-vue.css' : 'css/bootstrap-vue.min.css',
	];

	public $js = [
		YII_ENV_DEV ? 'css/bootstrap-vue.js' : 'js/bootstrap-vue.min.css',
	];

	public $depends = [
		'ww\yii2vuejs\Bootstrap4Asset',
		'ww\yii2vuejs\VueJsAsset',
	];

}
