<?php

namespace Aesimpt\UserSubscription\Traits;

use Laravel\Cashier\Billable;

trait Payment
{
    use Billable;

    public function subscription()
    {
        return $this->hasMany(
            'Aesimpt\UserSubscription\Model\Subscription',
            'user_id',
            'id'
        );
    }
}