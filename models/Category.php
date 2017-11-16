<?php

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord {
    
    public static function tableName() {
        return 'categories'; // вернет имя таблицы с котороый мы хоти работать
    }
    
    public function getProducts() { // можно и другое название. Приставка "get"  объязательна
        return $this->hasMany(Product::className(), ['parent' => 'id']);
    }
    
}
