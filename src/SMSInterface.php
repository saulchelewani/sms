<?php

namespace TNM\SMS;

interface SMSInterface
{
    function sendMessage($MSISDN, $message);
}
