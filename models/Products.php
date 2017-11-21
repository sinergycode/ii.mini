<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property string $id
 * @property string $title
 * @property string $parent
 * @property string $content
 * @property string $image
 * @property double $price
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'parent', 'content', 'price'], 'required'],
            [['parent'], 'integer'],
            [['content'], 'string'],
            [['price'], 'number'],
            [['title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'parent' => 'Parent',
            'content' => 'Content',
            'image' => 'Image',
            'price' => 'Price',
        ];
    }
}
