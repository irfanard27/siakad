<?php

namespace app\modules\tes;

use dmstr\web\traits\AccessBehaviorTrait;

class Module extends \yii\base\Module
{
    //use AccessBehaviorTrait;

    public $controllerNamespace = 'app\modules\tes\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
