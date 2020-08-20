<?php
use app\assets\AppAsset;
use yii\widgets\LinkPager;	
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

use app\widgets\Alert;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

if (Yii::$app->user->isGuest)
{
    ("Location: http://kappa.cs.petrsu.ru/~averkov/basic/web/index.php");

}
