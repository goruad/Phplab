

<?php
use yii\widgets\LinkPager;	
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

use app\widgets\Alert;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


			echo '<table border="5" style="font-size:small; width: 600px;" align="center">';
			if(!Yii::$app->user->isGuest) {
NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout ('. Yii::$app->user->identity->username .')',
                    ['class' => 'btn btn-link logout']
                )
                 
                . Html::endForm()
                . '</li>'

            ),
            ['label' => 'Home', 'url' => ['/site/index']],

            ['label' => 'ImagesDB', 'url' => ['/images/index']]
 	    
        ],
    ]);
    NavBar::end();
    
echo ('<h3 style="margin-top:10%">'."Hello"." ".Yii::$app->user->identity->username." "."!".'</h3>');
			
			}
		

	else {echo ('<h3 style="margin-top:10%"> User please log in !!! </h3>');

      ("Location: http://kappa.cs.petrsu.ru/~averkov/basic/web/index.php?r=site%2Flogin");

}
		?>