
<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<!--<h1>--><?//=$view_hello_str?><!--</h1>-->

<!-- 字符串化 script 代码 -->
<h1><?= Html::encode( $view_hello_str ) ?></h1>

<!-- 过滤 script 代码 -->
<h1><?= HtmlPurifier::process( $view_hello_str ) ?></h1>