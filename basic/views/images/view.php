<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Images */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<style>

img {
    max-width: 40%;
}






* {
	margin: 0;
	padding: 0;
}
html,
body {
	height: 100%;
}
.wrapper {
	position: relative;
	min-height: 100%;
}
.content {
	padding-bottom: 90px;
}
.footer {
	position: absolute;
	left: 0;
	bottom: 0;
	width: 100%;
	height: 80px;
}
</style>

<div class="images-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'caption',
            
[
              'attribute'=>'img',
	'value'=>$model->img,
         
       'format'=>['image'],['width'=>100,'height'=>100],
      
],
[
              'attribute'=>'link',
	'value'=>$model->img,
 'format'=>'url',
       


]
        ],
    ]) ?>

</div>
