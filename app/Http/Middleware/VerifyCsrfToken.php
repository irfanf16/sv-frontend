<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'verify-user-info',
        'add-user',
        'get-selected-plan',
        'payment-card-intent',
        'authenticate-user',
        'payment-confirm-from-old-card',
        'talk-to-sales',
        'plan-add-without-card',
        'become-partner',
        'apply-coupon'
    ];
}
