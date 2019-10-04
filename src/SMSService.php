<?php

namespace TNM\SMS;

use SoapClient;

class SMSService extends SoapClient
{
    private $header;

    public function __construct($webserviceURL, AuthenticationHeader $header, array $options = array())
    {
        parent::__construct($webserviceURL, $options);

        $this->header = $header;
    }

    public function sendMessage(SendSMSRequestMessage $smsRequestMessage)
    {
        try {
            $response = $this->__soapCall('SendMessage', $smsRequestMessage->__toArray(), null, [$this->header]);

            return new SendSMSResponseMessage($response->ResultCode, $response->ResultDescription);
        } catch (\Exception $ex) {
            return new NullSendSMSResponseMessage();
        }
    }
}

