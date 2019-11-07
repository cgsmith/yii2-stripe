<?php

namespace cgsmith\stripe;


use yii\base\Component;
use yii\base\Exception;

class Stripe extends Component
{
    public $publicKey;
    public $privateKey;

    /**
     * init Stripe component
     * 
     * @throws Exception
     */
    public function init()
    {
        if (!$this->publicKey) {
            throw new Exception('Stripe component needs publicKey set for initializing');
        }
        if (!$this->privateKey) {
            throw new Exception('Stripe component needs publicKey set for initializing');
        }
        parent::init();
    }

}
