<?php
namespace backend\models;

use Yii;

class Customer extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['BookStore', 'customer'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'firstname',
            'lastname',
            'phone',
            'email',
            'password',
            'address',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id', 'firstname', 'lastname','phone', 'email', 'password', 'address',], 'safe']
        ];
    }
}

 ?>
