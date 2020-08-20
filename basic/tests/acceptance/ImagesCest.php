<?php

use yii\helpers\Url;

class ImagesCest
{
    public function TablForLoginsAndImages(AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/site/login'));
        $I->see('Hello, login please:', 'p');
        $I->fillField('input[name="LoginForm[username]"]', 'dasha');
        $I->fillField('input[name="LoginForm[password]"]', '21051999');
        $I->click('login-button');
        $I->see('Welcome, dasha !');
	$I ->click("Database");
        $I->see ('Images');
 	$I->see('Logout (dasha)');
        $I->see ('File');

    }
}
