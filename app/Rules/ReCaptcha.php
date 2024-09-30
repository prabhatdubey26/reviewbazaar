<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use GuzzleHttp\Client;

class ReCaptcha implements Rule
{
    protected $secret;
    protected $response;
    
    public function __construct($response)
    {
        $this->secret = config('services.recaptcha.secret'); // Add your reCAPTCHA secret here
        $this->response = $response;
    }

    public function passes($attribute, $value)
    {
        if (empty($this->response)) {
            return false;
        }

        $client = new Client();
        $res = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => $this->secret,
                'response' => $this->response,
            ],
        ]);
        $body = json_decode((string) $res->getBody());

        return $body->success;
    }

    public function message()
    {
        return 'The reCAPTCHA verification failed. Please try again.';
    }
}
