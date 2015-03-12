<?php

/**
 * D3 Asset
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\d3;

use yii\web\AssetBundle;

class D3Asset extends AssetBundle {

    public $sourcePath = '@bower/d3';
    public $css = [];
    public $js = ['d3.js'];
//    public $depends = ['yii\web\JqueryAsset'];

}
