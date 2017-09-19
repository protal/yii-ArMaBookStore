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
    	$request = Yii::$app->request;
    	$search = $request->get('search',null);

    	$query = book::find();
    	if($search != null ){
    		$query->where(["name" =>$search]);
    	}
    	$result = $query->all();

    	echo $search;

    	return $this->render('index', [
    			'input' => $search,
    			'result' => $result
    	]);

        $this->layout = "@backend/themes/adminlte/layouts/index";
        return $this->render('index');
    }
    public function actionEdit(){
    	$request =Yii::$app->request;
    	$id=$request->get('id',null);

    	$model = book::findOne($id);
    	return $this->render('edit',[
    			'model'=>$model
    	]);
    }


    public function actionNewbook(){

    	return $this->render('newbook');
    }

    public function actionBooklist(){
    	$request = Yii::$app->request;
    	$search = $request->get('search',null);


    	$query = book::find();
    	if($search != null ){
    		$query->where(["name" =>$search]);
    	}
    	$result = $query->all();

    	echo $search;

    	return $this->render('booklist', [
    			'input' => $search,
    			'result' => $result
    	]);
    	return $this->render('booklist');
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


        //get id edit , not id -> new
        $id = $request->get('id',null);
        $name = $request->get('name',null);
        $version = $request->get('version',null);
        $type = $request->get('type',null);
        $price = $request->get('price',null);
        $days = $request->get('days',null);
        $charge = $request->get('charge',null);
        $total = $request->get('total',null);

        $baseUrl = \Yii::getAlias('@web');

        $model;

        if($id == null){
          $book = new Book;
        }else {
          $book = Book::findOne($id);
        }

        $book->name = $name;
        $book->version = $version;
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
       	//กลับไปหน้ารายการหนังสือ
         return $this->redirect($baseUrl."/manage/booklist");
    }

    public function actionDelete(){
    	$request =Yii::$app->request;
    	$id=$request->get('id',null);
    	$baseUrl=\Yii::getAlias('@web');

    	$model = book::findOne($id);
    	$model->delete();

    	return $this->redirect($baseUrl."/manage/booklist");

    }
    public function actionBookhistory(){

    	return $this->render('bookhistory');
    }
}
