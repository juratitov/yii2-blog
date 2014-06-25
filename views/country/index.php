<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>


<h1>Countries</h1>
<ul>
    <?php foreach ($countries as $country): ?>
        <li>
            <?= Html::encode("{$country->name} ({$country->code})") ?>:
            <?= $country->population ?>
            <?= \yii\helpers\HtmlPurifier::process($country->name) ?>
        </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>