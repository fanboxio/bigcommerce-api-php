<?php

namespace Bigcommerce\Api;

/**
 * Base class for API exceptions. Used if failOnError is true.
 */
class Error extends \Exception
{
    public function __construct($message, $code)
    {
        if (is_array($message)) {
            $message = $message[0]->message;
        }

        if (isset($message->title)) {
            $message = $message->title;
        }

        parent::__construct($message, $code);
    }
}
