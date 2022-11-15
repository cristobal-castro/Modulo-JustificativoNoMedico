<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Justificativo".
 *
 * @property int $id
 * @property string $Estado
 * @property string $FechaEnvio
 * @property string|null $FechaFaltaStart
 * @property string|null $FechaFaltaEnd
 * @property string|null $ActivdadJustificar
 * @property string $Motivo
 * @property string $rut
 * @property string $CodigoAsignatura
 *
 * @property Asignatura $codigoAsignatura
 * @property Persona $rut0
 */
class Justificativo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Justificativo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Estado', 'FechaEnvio', 'Motivo', 'rut', 'CodigoAsignatura'], 'required'],
            [['FechaEnvio', 'FechaFaltaStart', 'FechaFaltaEnd'], 'safe'],
            [['Estado', 'rut'], 'string', 'max' => 50],
            [['ActivdadJustificar'], 'string', 'max' => 256],
            [['Motivo'], 'string', 'max' => 1000],
            [['CodigoAsignatura'], 'string', 'max' => 100],
            [['rut'], 'exist', 'skipOnError' => true, 'targetClass' => Persona::class, 'targetAttribute' => ['rut' => 'rut']],
            [['CodigoAsignatura'], 'exist', 'skipOnError' => true, 'targetClass' => Asignatura::class, 'targetAttribute' => ['CodigoAsignatura' => 'Codigo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Estado' => 'Estado',
            'FechaEnvio' => 'Fecha Envio',
            'FechaFaltaStart' => 'Fecha Falta Start',
            'FechaFaltaEnd' => 'Fecha Falta End',
            'ActivdadJustificar' => 'Activdad Justificar',
            'Motivo' => 'Motivo',
            'rut' => 'Rut',
            'CodigoAsignatura' => 'Codigo Asignatura',
        ];
    }

    /**
     * Gets query for [[CodigoAsignatura]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoAsignatura()
    {
        return $this->hasOne(Asignatura::class, ['Codigo' => 'CodigoAsignatura']);
    }

    /**
     * Gets query for [[Rut0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRut0()
    {
        return $this->hasOne(Persona::class, ['rut' => 'rut']);
    }
}
