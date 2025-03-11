<?php

namespace Lesson04\betterMI;

class User
{
    public function email()
    {
        return 'email@example.com';
    }
}

class Newsletter
{
    public function subscribe(
        User $user,
        string $list,
        NewsletterProviderInterface $provider,
    ): void {
        $provider->addToList('default', $user->email());
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

$newsletter = new Newsletter();
$newsletter->subscribe(new User(), 'default', $cm);
$newsletter->subscribe(new User(), 'default', $pm);