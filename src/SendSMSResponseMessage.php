<?php

namespace TNM\SMS;

class SendSMSResponseMessage
{

    private $resultCode;

    private $message;

    public function __construct($resultCode, $message)
    {
        $this->resultCode = $resultCode;
        $this->message = $message;
    }

    public function getResultCode()
    {
        return $this->resultCode;
    }

    public function isSuccessful()
    {
        return $this->getResultCode() == 1000;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
