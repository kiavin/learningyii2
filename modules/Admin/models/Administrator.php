<?php

namespace app\modules\Admin\models;

use Yii;

/**
 * This is the model class for table "Admin".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password_hash
 * @property string|null $authkey
 * @property string|null $password_reset_token
 * @property string $accessToken
 * @property int $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int $phone
 * @property string|null $user_img
 */
class Administrator extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password_hash', 'phone'], 'required'],
            [['status', 'phone'], 'integer'],
            [['username'], 'string', 'max' => 30],
            [['email', 'authkey'], 'string', 'max' => 100],
            [['password_hash'], 'string', 'max' => 100],
            [['password_reset_token'], 'string', 'max' => 20],
            [['accessToken'], 'string', 'max' => 11],
            [['user_img'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['name', 'email'], 'unique', 'targetAttribute' => ['name', 'email']],
            [['phone'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'username',
            'email' => 'Email',
            'password_hash' => 'Password Hash',
            'authkey' => 'Authkey',
            'password_reset_token' => 'Password Reset Token',
            'accessToken' => 'Access Token',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'phone' => 'Phone',
            'user_img' => 'User Img',
        ];
    }
}
