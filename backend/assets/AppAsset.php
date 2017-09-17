<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      'bootstrap/css/bootstrap.css',
      'fresh-table/css/fresh-bootstrap-table.css',


    ];
    public $js = [
      'fresh-table/js/jquery-1.11.2.min.js',
      'bootstrap/js/bootstrap.js',
      'fresh-table/js/bootstrap-table.js',


    ];
    // public $depends = [
    //   'yii\web\YiiAsset',
    //   'yii\bootstrap\BootstrapAsset',
    // ];
}
