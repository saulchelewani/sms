<?php

namespace TNM\SMS;

use SoapHeader;

class AuthenticationHeader extends SoapHeader
{

    public function __construct($namespace, $attribute, $value)
    {
        parent::SoapHeader($namespace, $attribute, $value);
    }
}