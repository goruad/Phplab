<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use app\assets\AppAsset;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ImagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
 
$this->title = 'Images';
$this->params['breadcrumbs'][] = $this->title;
    if(Yii::$app->user->isGuest){
         echo ('<h3 style="margin-top:10%"> User please log in !!! </h3>');
}
      else{

 echo(
"
<div class="images-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Images', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->name), ['view', 'id' => $model->id]);
        },
    ]) ?>


</div>
");
}