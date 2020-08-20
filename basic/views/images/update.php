<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Images */
if (Yii::$app->user->isGuest)
{
  Yii::$app->response->redirect(['/site/login']);
}

$this->title = 'Update Images: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="images-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('noload', [
        'model' => $model,
    ]) ?>

</div>
