<?php

namespace Lesson04\betterCI;

class User
{
    public function email()
    {
        return 'email@example.com';
    }
}

class Newsletter
{
    public function __construct(public NewsletterProviderInterface $provider) {}

    public function subscribe(User $user, string $list): void
    {
        $this->provider->addToList('default', $user->email());
    }
}

interface NewsletterProviderInterface
{
    public function addToList(string $listName, string $email): void;
}

class CampaignMonitorProvider implements NewsletterProviderInterface
{
    public function addApiKey(string $apiKey): void {}

    public function addToList(string $listName, string $email): void
    {
        // doing some things
        // calling campaign monitor API
    }
}

class PostmarkProvider implements NewsletterProviderInterface
{
    public function __construct(public string $apiKey) {}

    public function addToList(string $listName, string $email): void
    {
        // doing some things
        // calling postmark SDK
    }
}

$cm = new CampaignMonitorProvider();
$cm->addApiKey('hdhdjd');

$pm = new PostmarkProvider('fgaaiuiwe');

$newsletterCm = new Newsletter($cm);
$newsletterCm->subscribe(new User(), 'default');

$newsletterPm = new Newsletter($pm);
$newsletterPm->subscribe(new User(), 'default');