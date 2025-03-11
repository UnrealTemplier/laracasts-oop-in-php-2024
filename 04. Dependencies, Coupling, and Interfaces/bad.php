<?php

namespace Lesson04\bad;

class User
{
    public function email()
    {
        return 'email@example.com';
    }
}

class Newsletter
{
    public function subscribe(User $user, string $list)
    {
        // First variant of hard dependency
        //$cm = new CampaignMonitorProvider();
        //$cm->addApiKey('jhdffjkdoj');
        //$cm->addToList('default', $user->email());

        // Second variant of hard dependency
        //$pm = new PostmarkProvider('fhgjdfhj');
        //$pm->addToList('default', $user->email());
    }
}

class CampaignMonitorProvider
{
    public function addApiKey(string $apiKey) {}

    public function addToList(string $listName, string $email)
    {
        // doing some things
        // calling campaign monitor API
    }
}

class PostmarkProvider
{
    public function __construct(public string $apiKey) {}

    public function addToList(string $listName, string $email)
    {
        // doing some things
        // calling postmark SDK
    }
}

$newsletter = new Newsletter();
$newsletter->subscribe(new User(), 'default');