<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "fase".
 *
 * @property integer $id_fase
 * @property string $descripcion
 *
 * @property DetalleFase[] $detalleFases
 */
class Fase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fase';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['id_fase', 'descripcion'], 'required'],
            [['descripcion'], 'required'],
            ['descripcion', 'match','pattern'=>"/^[a-z]+$/i",'message'=> 'Sólo se aceptan letras'],
            [['id_fase'], 'integer'],
            [['descripcion'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_fase' => 'Id Fase',
            'descripcion' => 'Descripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleFases()
    {
        return $this->hasMany(DetalleFase::className(), ['fase_id' => 'id_fase']);
    }
}
