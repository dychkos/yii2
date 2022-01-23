<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "persons".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int|null $role
 * @property string $first_name
 * @property string $last_name
 * @property string $middle_name
 * @property string $email
 * @property string $phone
 * @property string $city
 * @property string $country
 *
 * @property Roles $role0
 */
class Persons extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'persons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'first_name', 'last_name', 'middle_name', 'email', 'phone', 'city', 'country'], 'required'],
            [['role'], 'integer'],
            [['username', 'first_name', 'last_name', 'middle_name', 'email', 'phone', 'city', 'country'], 'string', 'max' => 25],
            [['password'], 'string', 'max' => 121],
            [['role'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::className(), 'targetAttribute' => ['role' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'role' => 'Role',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'middle_name' => 'Middle Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'city' => 'City',
            'country' => 'Country',
        ];
    }

    /**
     * Gets query for [[Role0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRole0()
    {
        return $this->hasOne(Roles::className(), ['id' => 'role']);
    }
}
