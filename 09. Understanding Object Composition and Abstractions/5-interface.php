<?php

namespace Lesson09\Interface;

class Subscription
{
    // using constructor property promotion
    // using constructor dependency injection
    // using interface
    public function __construct(
        protected BillingGateway $billingGateway,
    ) {}

    public function create(): void
    {
        // create new subscription
        // using a third-party specialized class
        // through an interface
        $this->billingGateway->getCustomer();
        $this->billingGateway->getSubscription();
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
// Methods to interact with billing providers
// are defined as a contract in an interface

interface BillingGateway
{
    public function getCustomer(): void;

    public function getSubscription(): void;
}

//
// Specific classes implements BillingGateway interface
// to implement specialized billing provider functionality

class StripeBillingGateway implements BillingGateway
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

class BraintreeBillingGateway implements BillingGateway
{
    public function getCustomer(): void
    {
        // get Braintree customer
        // use Braintree API
    }

    public function getSubscription(): void
    {
        // get Braintree subscription
        // use Braintree API
    }
}

$stripeSubscription = new Subscription(new StripeBillingGateway());
$stripeSubscription->create();
$stripeSubscription->swap('Lifetime');
$stripeSubscription->invoice();
$stripeSubscription->cancel();

$braintreeSubscription = new Subscription(new BraintreeBillingGateway());
$braintreeSubscription->create();
$braintreeSubscription->swap('Lifetime');
$braintreeSubscription->invoice();
$braintreeSubscription->cancel();
