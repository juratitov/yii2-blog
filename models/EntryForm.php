<?php
/**
 * Created by PhpStorm.
 * User: Jura
 * Date: 18.06.14
 * Time: 1:17
 */

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
    
    
}