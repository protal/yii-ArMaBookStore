<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Book;
use backend\models\Customer;
use backend\models\Rent;

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
    	// $request = Yii::$app->request;
    	// $search = $request->get('search',null);
      //
    	// $query = book::find();
    	// if($search != null ){
    	// 	$query->where(["name" =>$search]);
    	// }
    	// $result = $query->all();
      //
      //
      //
    	// return $this->render('index', [
    	// 		'input' => $search,
    	// 		'result' => $result,
      //     'search'=>$search,
    	// ]);

        // $this->layout = "@backend/themes/adminlte/layouts/index";
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

    	return $this->render('booklist', [
    			'input' => $search,
    			'result' => $result,
          'search'=>$search,
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
        $session = Yii::$app->session;


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
          //echo "success";
          $session->setFlash('success', "บันทึกสำเร็จ");
          return $this->redirect($baseUrl."/manage/booklist");
        }
        else {
          $session->setFlash('danger', " แก้ไขผิดพลาด");
          return $this->redirect($baseUrl."/manage/edit");
        }
    }


    public function actionDelete(){
    	$request =Yii::$app->request;
    	$session = Yii::$app->session;

    	$id=$request->get('id',null);
    	$baseUrl=\Yii::getAlias('@web');

    	$model = book::findOne($id);
    	$model->delete();

    	if($model->delete()){
    		$session->setFlash('danger', " ลบผิดพลาด");
    		return $this->redirect($baseUrl."/manage/booklist");

    	}
    	else {
    		//echo "success";
    		$session->setFlash('success', "ลบสำเร็จ");
    		return $this->redirect($baseUrl."/manage/booklist");
    	}

    }
    public function actionBookhistory(){
    	$request = Yii::$app->request;
    	$search = $request->get('search',null);

    	$query = Rent::find();
    	$result = $query->all();

    	echo $search;

    	return $this->render('bookhistory', [
    			'input' => $search,
    			'result' => $result
    	]);



    	return $this->render('bookhistory');

    }



//manage ของ customer ด้านล่างทั้งหมด



    public function actionNewcustomer(){

    	return $this->render('newcustomer');
    }

    public function actionCustomerlist(){
    	$request = Yii::$app->request;
    	$search = $request->get('search',null);


    	$query = customer::find();
    	if($search != null ){
    		$query->where(["firstname" =>$search]);
    	}
    	$result = $query->all();

    	return $this->render('customerlist', [
    			'input' => $search,
    			'result' => $result,
    			'search'=>$search,
    	]);
    	return $this->render('customerlist');
    }




    /**
     * Add book
     *
     * @return string
     */
    public function actionCustomersave()
    {
    	//config
    	$request = Yii::$app->request;
    	$session = Yii::$app->session;


    	//get id edit , not id -> new
    	$id = $request->get('id',null);
    	$firstname = $request->get('firstname',null);
    	$lastname = $request->get('lastname',null);
    	$phone = $request->get('phone',null);
    	$email = $request->get('email',null);
    	$password = $request->get('password',null);
    	$address = $request->get('address',null);

    	$baseUrl = \Yii::getAlias('@web');

    	$model;

    	if($id == null){
    		$customer = new Customer;
    	}else {
    		$customer = Customer::findOne($id);
    	}


    	$customer->firstname = $firstname;
    	$customer->lastname = $lastname;
    	$customer->phone = $phone;
    	$customer->email = $email;
    	$customer->password = $password;
    	$customer->address = $address;

     	if($customer->save()){
          //echo "success";
          $session->setFlash('success', "บันทึกสำเร็จ");
          return $this->redirect($baseUrl."/manage/customerlist");
        }
        else {
          $session->setFlash('danger', " แก้ไขผิดพลาด");
          return $this->redirect($baseUrl."/manage/customeredit");
        }


    }


    public function actionCustomerdelete(){
    	$request =Yii::$app->request;
    	$session = Yii::$app->session;

    	$id=$request->get('id',null);
    	$baseUrl=\Yii::getAlias('@web');

    	$model = customer::findOne($id);
    	$model->delete();

    	if($model->delete()){
    		$session->setFlash('danger', " ลบผิดพลาด");
    		return $this->redirect($baseUrl."/manage/customerlist");

    	}
    	else {
    		//echo "success";
    		$session->setFlash('success', "ลบสำเร็จ");
    		return $this->redirect($baseUrl."/manage/customerlist");
    	}
    	// return $this->redirect($baseUrl."/manage/customerlist");

    }
    public function actionEditcustomer(){
    	$request =Yii::$app->request;
    	$id=$request->get('id',null);

    	$model = customer::findOne($id);
    	return $this->render('editcustomer',[
    			'model'=>$model
    	]);
    }

    public function actionCustomerhistory(){
    	$request = Yii::$app->request;
    	$search = $request->get('search',null);

    	$query = customer::find();
    	if($search != null ){
    		$query->where(["name" =>$search]);
    	}
    	$result = $query->all();

    	echo $search;

    	return $this->render('customerhistory', [
    			'input' => $search,
    			'result' => $result
    	]);

    	return $this->render('customerhistory');
    }

    public function actionChangestatus()
    {
      $request = Yii::$app->request;
      $id = $request->post('id',null);
      $book_ar = $request->post('book_ar',null);
      $message = $request->post('message',null);
      $rent = Rent::findOne($id);
      $t = $rent['books'];
      $t[$book_ar]['status'] = $message;
      $rent->books = $t;
      $rent->save();
      return $id." ".$book_ar." ".$message;
    }
}
