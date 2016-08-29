<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/27
 * Time: 22:23
 */
namespace frontend\assets;

use yii\web\AssetBundle;

class BootStrapHoverAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-hover-dropdown';
    public $css = [

    ];
    public $js = [
        'bootstrap-hover-dropdown.min.js'
    ];

}