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


        // $this->layout = "@backend/themes/adminlte/layouts/index";
        return $this->render('index');
    }


    public function actionRent()
    {
        // $book_json = '{"cid":1,"items":[{"id":1},{"id":1}]}';
        // $books =  json_decode($book_json);
        // $customer_id = $books->cid;
        // foreach ($books->items as $it) {
        //   echo $it->id."<br>";
        // }

        // $customer = '59be870341c514f29066e219';
        // $rent = new Rent();
        // $rent->customer = $customer;
        // $rent->start_at = date("Y-m-d H:i:s");
        // $rent->price = '20';
        // $rent->books = array('59bc068b1167e515231c6b52','59be9e891167e5040b6ecd72');
        // echo $rent->save();


    }
}
