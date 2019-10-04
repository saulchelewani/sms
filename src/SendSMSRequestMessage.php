<?php

namespace TNM\SMS;


class SendSMSRequestMessage
{
    use AttributeEnvelope;

    private $phoneNumbers;
    private $message;


    /**
     * SendSSMSRequestMessage constructor.
     * @param array $phoneNumbers
     * @param string $message
     */
    public function __construct(array $phoneNumbers, $message)
    {
        $this->phoneNumbers = $phoneNumbers;
        $this->message = $message;
    }


    public function get()
    {
        return $this->prepareAttributes([
            'Destination' => $this->phoneNumbers,
            "IsMultipart" => true,
            "Message" => $this->message,
        ]);
    }

    public function __toArray()
    {
        return [$this->get()];
    }
}
