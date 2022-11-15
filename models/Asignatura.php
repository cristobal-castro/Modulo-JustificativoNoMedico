<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Asignatura".
 *
 * @property string $Codigo
 * @property string|null $Nombre
 *
 * @property Imparte[] $impartes
 * @property Persona[] $ruts
 */
class Asignatura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Asignatura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Codigo'], 'required'],
            [['Codigo', 'Nombre'], 'string', 'max' => 100],
            [['Codigo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Codigo' => 'Codigo',
            'Nombre' => 'Nombre',
        ];
    }

    /**
     * Gets query for [[Impartes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImpartes()
    {
        return $this->hasMany(Imparte::class, ['Codigo' => 'Codigo']);
    }

    /**
     * Gets query for [[Ruts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRuts()
    {
        return $this->hasMany(Persona::class, ['rut' => 'Rut'])->viaTable('Imparte', ['Codigo' => 'Codigo']);
    }

    public function getAll(){
        return $this::find()->orderBy('Nombre')->all();
    }
}
