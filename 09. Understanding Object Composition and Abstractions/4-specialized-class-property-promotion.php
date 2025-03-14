<?php

namespace Lesson09\SpecializedClassPropertyPromotion;

class Subscription
{
    // using constructor property promotion
    // using constructor dependency injection
    public function __construct(
        protected StripeBillingGateway $stripeBillingGateway,
    ) {}

    public function create(): void
    {
        // create new subscription
        // using a third-party specialized class
        $this->stripeBillingGateway->getCustomer();
        $this->stripeBillingGateway->getSubscription();
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
}

//
// Methods to interact with Stripe are publicly exposed
// by a specialized class

class StripeBillingGateway
{
    public function getCustomer(): void
    {
        // get Stripe customer
        // use Stripe API
    }

    public function getSubscription(): void
    {
        // get Stripe subscription
        // use Stripe API
    }
}

$subscription = new Subscription(new StripeBillingGateway());
$subscription->create();
$subscription->swap('Lifetime');
$subscription->invoice();
$subscription->cancel();
