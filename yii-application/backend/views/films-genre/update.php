<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FilmsGenre */

$this->title = 'Update Films Genre: ' . $model->film_id;
$this->params['breadcrumbs'][] = ['label' => 'Films Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->film_id, 'url' => ['view', 'film_id' => $model->film_id, 'genre_id' => $model->genre_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="films-genre-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
