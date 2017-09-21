<?php
namespace backend\models;

use Yii;


/**
 * This is the model class for collection "lecturer".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $name
 * @property String $dob
 * @property mixed $gender
 * @property mixed $degree
 * @property mixed $address
 * @property mixed $email
 * @property mixed $phone_number
 */
class Rent extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['BookStore', 'rent'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'customer',
            'books',
            'start_at',
            'price',
            'charge',
        	'status',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id', 'Customer', 'Book_id', 'start_at', 'price', 'charge','status'], 'safe']
        ];
    }
}

 ?>
