<?php

namespace Lib;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;

class Mailchimp
{
    private $apiKey;
    private $audienceId;
    private $client;

    public function __construct()
    {
        $this->apiKey = env('MAILCHIMP_API_KEY', null);
        $this->audienceId = env('MAILCHIMP_AUDIENCE_ID', null);

        if (!$this->isSetUp()) {
            return;
        }

        $dataCenter = explode('-', $this->apiKey)[1];

        $this->client = new Client([
            'base_uri' => "https://$dataCenter.api.mailchimp.com/3.0/",
        ]);
    }

    public function addToNewsletter(string $email)
    {
        if (!$this->isSetUp()) {
            return;
        }

        try {
            $this->setStatus($email, true);
        } catch (RequestException $e) {
            \Log::error(
                "Failed to add $email to newsletter", [
                    'api response' => Psr7\str($e->getResponse()),
                ]
            );
        }
    }

    public function updateSubscriberEmail(string $oldEmail, string $newEmail)
    {
        if (!$this->isSetUp()) {
            return;
        }

        $memberId = $this->getMemberId($oldEmail);
        $url = "lists/{$this->audienceId}/members/$memberId";

        try {
            $this->client->patch($url, [
                'auth' => ['user', $this->apiKey],
                'json' => [
                    'email_address' => $newEmail,
                    'status' => 'subscribed',
                ],
            ]);
        } catch (RequestException $e) {
            \Log::error(
                "Failed to change $oldEmail to $newEmail in newsletter", [
                    'api response' => Psr7\str($e->getResponse()),
                ]
            );
        }
    }

    public function removeFromNewsletter(string $email)
    {
        if (!$this->isSetUp()) {
            return;
        }

        try {
            $this->setStatus($email, false);
        } catch (RequestException $e) {
            \Log::error(
                "Failed to remove $email from newsletter", [
                    'api response' => Psr7\str($e->getResponse()),
                ]
            );
        }
    }

    public function isSubscribedToNewsletter(string $email)
    {
        if (!$this->isSetUp()) {
            return;
        }

        $memberId = $this->getMemberId($email);
        $url = "lists/{$this->audienceId}/members/$memberId";

        try {
            $response = json_decode(
                $this->client
                     ->get($url, ['auth' => ['user', $this->apiKey]])
                     ->getBody()
                     ->getContents()
             );

            return $response->status === 'subscribed';
        } catch (RequestException $e) {
            return false;
        }
    }

    private function isSetUp()
    {
        return $this->apiKey && $this->audienceId;
    }

    private function getMemberId(string $email)
    {
        return hash('md5', strtolower($email));
    }

    private function setStatus(string $email, bool $isSubscribed)
    {
        $memberId = $this->getMemberId($email);
        $url = "lists/{$this->audienceId}/members/$memberId";

        return $this->client->put($url, [
            'auth' => ['user', $this->apiKey],
            'json' => [
                'email_address' => $email,
                'status' => $isSubscribed ? 'subscribed' : 'unsubscribed',
            ],
        ]);
    }
}
