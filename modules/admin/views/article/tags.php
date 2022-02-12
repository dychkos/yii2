<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $selectedTags app\models\Tag */
/* @var $tags app\models\Tag */

?>
<div class="article-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= Html::dropDownList('tags',$selectedTags,$tags,['class' => 'form-control','multiple' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
