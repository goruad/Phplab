<?php 
use yii\helpers\Url;
class LoadLoginCest
{
    public function _before(FunctionalTester $I)
    {
     $I->amOnPage('/site/signup');
    }


  public function _after(FunctionalTester $I)
    {
    }

    public function TestSignUp(FunctionalTester $I)
    {
         $I->see ('Signup');
	 
    }
}
?>
