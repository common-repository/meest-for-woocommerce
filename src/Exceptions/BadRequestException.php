<?php

namespace MeestShipping\Exceptions;

class BadRequestException extends \Exception
{
    /**
     * Create a new exception instance.
     *
     * @param  $response
     * @return void
     */
    public function __construct($response)
    {
        $message = null;

        if (isset($response['response']['code']) && $response['response']['code'] === 400) {
            $body = json_decode($response['body'], true);

            $message = $body['info']['message']
                .(!empty($body['info']['fieldName']) ? ' ('.$body['info']['fieldName'].') ' : null)
                .(!empty($body['info']['messageDetails']) ? ': '.$body['info']['messageDetails'].') ' : null);
        }

        parent::__construct($message, 400);
    }
}
