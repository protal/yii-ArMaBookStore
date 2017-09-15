<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Book;

/**
 * Site controller
 */
class ManageController extends Controller
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

    /**
     * Add book
     *
     * @return string
     */
    public function actionBooksave()
    {
        //config
        $request = Yii::$app->request;
        $baseUrl = \Yii::getAlias('@web');

        $id = $request->get('id',null);
        $name = $request->get('name',null);
        $type = $request->get('type',null);
        $price = $request->get('price',null);
        $days = $request->get('days',null);
        $charge = $request->get('charge',null);
        $total = $request->get('total',null);
        if($id == null){
          $book = new Book;
        }else {
          $book = Book::findOne($id);
        }

        $book->name = $name;
        $book->type = $type;
        $book->price = $price;
        $book->days = $days;
        $book->charge = $charge;
        $book->total = $total;

        if($book->save()){
          echo "success";
        }else {
          echo "error";
        }

        
        //waiting redirect
        // return $this->redirect($baseUrl."/course/index");
    }
}
