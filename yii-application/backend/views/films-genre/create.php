<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FilmsGenre */

$this->title = 'Create Films Genre';
$this->params['breadcrumbs'][] = ['label' => 'Films Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="films-genre-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
