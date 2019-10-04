<?php
namespace TNM\SMS;


class NullSendSMSResponseMessage extends SendSMSResponseMessage
{
    public function __construct()
    {
        parent::__construct(0, null);
    }
}