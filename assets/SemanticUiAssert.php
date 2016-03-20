<?php
namespace signvote\semanticui;

use yii\web\AssetBundle;

/**
 * Asset bundle for the semantic ui css files.
 *
 * @author WangXianfeng <wang-xianfeng@qq.com>
 * @since 0.1
 */
class SemanticUiAsset extends AssetBundle
{

    public $sourcePath = '@vendor/semantic/ui/dist';

    public $css = [
        'semantic.css'
    ];

    public $js = [
        'semantic.js'
    ];
}
