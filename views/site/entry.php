<?php
/**
 * Created by PhpStorm.
 * User: Jura
 * Date: 18.06.14
 * Time: 1:24
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin() ?>

<?= $form->field($model, 'name')->label('Введите имя:') ?>
<?= $form->field($model, 'email')->label('Введите email:') ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>


<?php ActiveForm::end() ?>