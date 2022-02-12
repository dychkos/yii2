<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $selectedCategory app\models\Category */
/* @var $categories app\models\Category[] */

?>
<div class="article-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= Html::dropDownList('category',$selectedCategory,$categories,['class' => 'form-control']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
