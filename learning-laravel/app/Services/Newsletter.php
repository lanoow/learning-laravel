<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class newsletter {
    public function subscribe(string $email) {
        return $this->client()->lists->addListMember(config('services.mailchimp.listid'), [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }

    protected function client() {
        return (new ApiClient())->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => config('services.mailchimp.server'),
        ]);
    }
}
