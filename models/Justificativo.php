<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "justificativo".
 *
 * @property int $idJustificativo
 * @property string|null $fechaFalta
 * @property string|null $motivoInasistencia
 * @property string|null $actividadJusticar
 * @property string|null $nombre_academico
 * @property string|null $asignatura
 * @property string|null $estado
 * @property string|null $fechaEnvio
 */
class Justificativo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'justificativo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fechaFalta', 'fechaEnvio'], 'safe'],
            [['motivoInasistencia', 'actividadJusticar'], 'string', 'max' => 1000],
            [['nombre_academico'], 'string', 'max' => 500],
            [['asignatura'], 'string', 'max' => 256],
            [['estado'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idJustificativo' => 'Id Justificativo',
            'fechaFalta' => 'Fecha Falta',
            'motivoInasistencia' => 'Motivo Inasistencia',
            'actividadJusticar' => 'Actividad Justicar',
            'nombre_academico' => 'Nombre Academico',
            'asignatura' => 'Asignatura',
            'estado' => 'Estado',
            'fechaEnvio' => 'Fecha Envio',
        ];
    }
}
