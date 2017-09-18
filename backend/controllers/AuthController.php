<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Customer;

/**
 * Site controller
 */
class AuthController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

        ];
    }
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionRegister()
    {
        return $this->render('register');
    }
    public function actionLogin()
    {
    	return $this->render('login');
    }
    public function actionLoginaction()
    {
      //config
      $request = Yii::$app->request;
      $baseUrl = \Yii::getAlias('@web');

      $email = $request->post('email',null);
      $pass = $request->post('password',null);

      $customer = Customer::findOne(['email'=>$email]);
      if(isset($customer) && ( md5($pass) == $customer->password ))
      {
        echo "TRUE";
      }
      else {
        echo "FALSE";
      }

    }
    public function actionRegistersave()
    {
      //config
      $request = Yii::$app->request;
      $baseUrl = \Yii::getAlias('@web');

      //get id edit , not id -> new
      $fname = $request->get('firstname',null);
      $lname = $request->get('lastname',null);
      $email = $request->get('email',null);
      $phone = $request->get('phone',null);
      $pass = $request->get('password',null);
      $address = $request->get('address',null);
      $customer = new Customer;

      $customer->firstname= $fname;
      $customer->lastname= $lname;
      $customer->phone= $phone;
      $customer->email= $email;
      $customer->password=  md5($pass);
      $customer->address= $address;

      if($customer->save()){
        echo "success";
      }else {
        echo "error";
      }
       return $this->redirect($baseUrl."/auth/login");
      }

      public function actionLoginsave()
      {
        //config
        $request = Yii::$app->request;
        $baseUrl = \Yii::getAlias('@web');


      }
    }
