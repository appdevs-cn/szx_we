<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%attr}}".
 *
 * @property integer $id
 * @property integer $attr_group_id
 * @property string $attr_name
 * @property integer $is_delete
 */
class Attr extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attr}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attr_group_id', 'attr_name'], 'required'],
            [['attr_group_id', 'is_delete'], 'integer'],
            [['attr_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'attr_group_id' => 'Attr Group ID',
            'attr_name' => 'Attr Name',
            'is_delete' => 'Is Delete',
        ];
    }
}
