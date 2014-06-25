<?php
/**
 * Created by PhpStorm.
 * User: Jura
 * Date: 18.06.14
 * Time: 1:24
 */
use yii\helpers\Html;

?>

<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>