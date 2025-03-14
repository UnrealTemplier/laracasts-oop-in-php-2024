<?php

namespace Lesson09\AllInOne;

class Subscription
{
    public function create(): void
    {
        // create new subscription
        // get Stripe customer
        // get Stripe subscription
    }

    public function cancel(): void
    {
        // cancel subscription
    }

    public function swap($newPlan): void
    {
        // swap subscription plan
    }

    public function invoice(): void
    {
        // get subscription invoice
    }

    //
    // Methods to interact with Stripe are bound
    // to internals of this class

    protected function getStripeCustomer(): void
    {
        // get Stripe customer
        // use Stripe API
    }

    protected function getStripeSubscription(): void
    {
        // get Stripe subscription
        // use Stripe API
    }
}

$subscription = new Subscription();
$subscription->create();
$subscription->swap('Lifetime');
$subscription->invoice();
$subscription->cancel();
