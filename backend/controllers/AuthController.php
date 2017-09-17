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
        $this->layout = "@backend/themes/adminlte/layouts/index";
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
      $customer->passWord= $pass;
      $customer->address= $address;

      if($customer->save()){
        echo "success";
      }else {
        echo "error";
      }
       return $this->redirect($baseUrl."/auth/register");
      }
    }
