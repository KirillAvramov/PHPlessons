<?php

namespace common\components;

use common\models\User;
use yii\base\Behavior;

class MyBehavior extends Behavior
{
    public $film;
    public $user;

    //может быть выйдет и с ActiveRecord
    public function events()
    {
        return [
            \common\models\Films::EVENT_AFTER_INSERT => 'afterInsert',
        ];
    }

    public function afterInsert()
    {
        if($this->user = Null) return;
        $this->film->author = User::findIdentity($this->user)->username;
        $this->film->save();
    }
}