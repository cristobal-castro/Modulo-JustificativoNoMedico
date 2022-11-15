<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Imparte".
 *
 * @property string $Codigo
 * @property string $Rut
 *
 * @property Asignatura $codigo
 * @property Persona $rut
 */
class Imparte extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Imparte';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Codigo', 'Rut'], 'required'],
            [['Codigo'], 'string', 'max' => 100],
            [['Rut'], 'string', 'max' => 50],
            [['Codigo', 'Rut'], 'unique', 'targetAttribute' => ['Codigo', 'Rut']],
            [['Rut'], 'exist', 'skipOnError' => true, 'targetClass' => Persona::class, 'targetAttribute' => ['Rut' => 'rut']],
            [['Codigo'], 'exist', 'skipOnError' => true, 'targetClass' => Asignatura::class, 'targetAttribute' => ['Codigo' => 'Codigo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Codigo' => 'Codigo',
            'Rut' => 'Rut',
        ];
    }

    /**
     * Gets query for [[Codigo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodigo()
    {
        return $this->hasOne(Asignatura::class, ['Codigo' => 'Codigo']);
    }

    /**
     * Gets query for [[Rut]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRut()
    {
        return $this->hasOne(Persona::class, ['rut' => 'Rut']);
    }
}
