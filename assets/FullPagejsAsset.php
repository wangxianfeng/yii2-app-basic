<?php


namespace common\asset;

use yii\web\AssetBundle;

/**
 * 
 * <p><b>标题：</b>common\asset$FullPagejsAsset.</p>
 *
 * <p><b>描述：fullpage js and css</b></p>
 *
 * <p><b>版权：</b>Copyright (c) 2016 signvote.cn</p>
 *
 * @author WangXianfeng<wang-xianfeng@qq.com> 2016年3月20日 下午10:10:39
 *
 * @since 1.0
 */
class FullPagejsAsset extends AssetBundle
{

    public $sourcePath = '@bower/fullpage.js/dist';

    public $css = [
        'jquery.fullpage.css'
    ];

    public $js = [
        'jquery.fullpage.js'
    ];
}