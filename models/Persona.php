<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "Persona".
 *
 * @property string $rut
 * @property string $Nombre
 * @property string $Apellido
 * @property string $Password
 * @property string $Email
 * @property int $Telefono
 * @property string $Direccion
 * @property string $Cargo
 * @property string|null $authkey
 * @property string|null $access_token
 *  
 * @property Asignatura[] $codigos
 * @property Imparte[] $impartes
 * @property Justificativo[] $justificativos
 */
class Persona extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Persona';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rut', 'Nombre', 'Apellido', 'Password', 'Email', 'Telefono', 'Direccion', 'Cargo'], 'required'],
            [['Telefono'], 'integer'],
            [['rut', 'Cargo', 'authkey'], 'string', 'max' => 50],
            [['Nombre', 'Apellido', 'Email'], 'string', 'max' => 100],
            [['Password'], 'string', 'max' => 300],
            [['Direccion'], 'string', 'max' => 120],
            [['access_token'], 'string', 'max' => 250],
            [['rut'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'rut' => 'Rut',
            'Nombre' => 'Nombre',
            'Apellido' => 'Apellido',
            'Password' => 'Password',
            'Email' => 'Email',
            'Telefono' => 'Telefono',
            'Direccion' => 'Direccion',
            'Cargo' => 'Cargo',
            'authkey' => 'Authkey',
        ];
    }

    /**
     * Gets query for [[Codigos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodigos()
    {
        return $this->hasMany(Asignatura::class, ['Codigo' => 'Codigo'])->viaTable('Imparte', ['Rut' => 'rut']);
    }

    /**
     * Gets query for [[Impartes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImpartes()
    {
        return $this->hasMany(Imparte::class, ['Rut' => 'rut']);
    }

    /**
     * Gets query for [[Justificativos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJustificativos()
    {
        return $this->hasMany(Justificativo::class, ['rut' => 'rut']);
    }


    public function getId()
    {
        return $this->rut;
    }


    public function getAuthKey()
    {
        return $this->authkey;
    }


    public function validateAuthKey($authKey)
    {
        return $this->authkey === $authKey;
    }
    
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return self::find()->where(['access_token'=>$token])->one();
    }

    public static function findIdentity($rut)
    {
       return self::findOne($rut);
    }

    public static function findByUsername($correo)
    {
        return self::findOne(['Email'=>$correo]);
    }

    public function validatePassword($password){
        return $this->Password===$password;
    }
}
