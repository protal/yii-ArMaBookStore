<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Rent;
use backend\models\Book;
use backend\models\Customer;


/**
 * Site controller
 */
class BookstoreController extends Controller
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
      $session = Yii::$app->session;

      if($session->has('user')){
        $user  = $session->get('user');
      }else {
        $user = null;
      }



    	$query = book::find();
    	if($search != null ){
    		$query->where(["name" =>$search]);
    	}
    	$result = $query->all();

    	echo $search;

    	return $this->render('index', [
    			'input' => $search,
    			'result' => $result,
          'user' => $user,
    	]);
        // $this->layout = "@backend/themes/adminlte/layouts/index";
        // return $this->render('index');
    }
    public function actionHistory()
    {
    	$request = Yii::$app->request;
    	$search = $request->get('search',null);

    	$query = book::find();
    	if($search != null ){
    		$query->where(["name" =>$search]);
    	}
    	$result = $query->all();

    	echo $search;

    	return $this->render('history', [
    			'input' => $search,
    			'result' => $result
    	]);


    	// $this->layout = "@backend/themes/adminlte/layouts/index";
    	return $this->render('history');
    }


    public function actionRent()
    {
        $request = Yii::$app->request;
        $book_json = $request->post('books',null);
        $books =  json_decode($book_json);


        $rent = new Rent();
        $rent->customer = Yii::$app->session->get('user')['_id'];
        $rent->start_at = date('m-d-y',strtotime("now"));
        $b = array();
        foreach ($books as $book) {
          $t = array();
          $bookq = Book::findOne($book);
          //วันที่คืน
          $t['book_id'] = $bookq['_id'];
          $t['end_date'] = date('m-d-y',strtotime("+".$bookq['days']." day"));
          //ราคาที่ซื้อตอนนั้น
          $t['price'] = $bookq['price'];
          //ราคาทีี่ปลับตอนนั้น
          $t['charge'] = $bookq['charge'];
          //สถานะ กำลังจัดส่ง
          $t['status'] = "กำลังจัดส่ง";
          // echo date('d/m/y h:i:s', $end_date)." ";
          array_push($b,$t);
        }
        $rent->books = $b;
        echo $rent->save();



    }
}
