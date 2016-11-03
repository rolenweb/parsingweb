<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class Order extends Model
{
    public $name;
    public $email;
    public $site;
    public $body;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'site', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function send($email)
    {
        $body = 'Name: '.$this->name.'<br><br> Sites: '.$this->site.'<hr>'.$this->body;
        if ($this->validate()) {
            Yii::$app->mailer->compose('order',['body' => $body])
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject('Заказ на парсинг')
                ///->setTextBody($this->site.'<hr>'.$this->body)
                ->send();

            return true;
        }
        return false;
    }
}
