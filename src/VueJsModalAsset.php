<?php

namespace ww\yii2vuejs;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Yii2 VueJsModal asset bundle
 * Class VueJsModalAsset
 * @package ww\yii2vuejs
 * @author pratapb <pratap.baniya@gmail.com>
 */
class VueJsModalAsset extends AssetBundle {

	public $sourcePath = '@bower/vue-js-modal/dist';

	public $js = [
		'index.js',
	];

	public $jsOptions = [
		'position' => View::POS_END,
	];

	public $depends = [
		'ww\yii2vuejs\VueJsAsset',
	];

}