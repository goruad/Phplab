<?php
use yii\widgets\DetailView;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Images;
use Yii;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ImagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model app\models\Images */

if (Yii::$app->user->isGuest)
{
  Yii::$app->response->redirect(['/site/login']);
}
$model=new Images();
$this->title = 'Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
img {
    max-width: 40%;
}
</style>
<div class="images-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Images', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
           
          
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'caption',

            
                    
      [ 
         'label'=>"File",
          
         'attribute'=>'img',
         'headerOptions' => ['style' => 'width:20%; right=40px;'],


         'format'=> 'image',
],

  
            ['class' => 'yii\grid\ActionColumn',
		],

    
        ],



    ]); ?>


</div>
