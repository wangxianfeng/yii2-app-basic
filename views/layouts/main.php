<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use signvote\semanticui\SemanticUiAsset;

AppAsset::register($this);
SemanticUiAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="签名秀  用签名的形式去投票 支持你所支持的，反对你所反对的" />
	<meta name="description" content="签名秀  签名投票 用签名的形式去投票 支持你所支持的，反对你所反对的" />
	<meta name="keywords"  content="签名秀  签名投票 用签名的形式去投票 支持你所支持的，反对你所反对的" />
	<meta name="Resource-type" content="Document" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?= $content ?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
