<?php

namespace giicms\user\models;

use giicms\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model {

    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $password_repeat;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['firstname', 'lastname', 'email', 'password'], 'required', 'message' => '{attribute} không được rỗng.'],
            [['firstname', 'lastname'], 'string', 'min' => 2, 'max' => 255],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Email này đã tồn tại trong hệ thống.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['password_repeat', 'compare', 'compareAttribute' => 'password', 'message' => 'Hai mật khẩu không trùng nhau!'],
        ];
    }

    public function attributeLabels() {
        return [
            'firstname' => 'Họ',
            'lastname' => 'Tên',
            'email' => 'Email',
            'password' => 'Mật khẩu',
            'password_repeat' => 'Nhập lại mật khẩu',
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup() {
        if ($this->validate()) {
            $user = new User();
            $user->firstname = $this->firstname;
            $user->lastname = $this->lastname;
            $user->email = $this->email;
            $username = User::findByUsername(explode('@', $this->email)[0]);
            if ($username)
                $user->username = explode('@', $this->email)[0] . '.' . $username->id;
            else
                $user->username = explode('@', $this->email)[0];
            $user->role = 'user';
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }

}
