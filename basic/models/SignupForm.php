<?php

namespace app\models;
use app\models\User;
use Yii;
use yii\web\IdentityInterface;
use app\models\UserIdentity;
use app\models\LoginForm;
/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string|null $authKey
 */
class SignupForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
	   ['username', 'unique', 'targetClass' => User::className(),  'message' => 'its a copy'],            [['username'], 'string', 'min'=>3 , 'max' => 16],
            [['password'], 'string','min'=>5 ,'max' => 256],
        ];
    }



public function signup()
    {

 $model = new User();
 $model->username = $this->username;
 $model->password=md5($this->password);
 if($model->save()){
Yii::$app->response->redirect(['site/login']);
  }

}




    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }
}
