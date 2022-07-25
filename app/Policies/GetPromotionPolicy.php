<?php

namespace App\Policies;

use App\Models\Request;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GetPromotionPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function submitRequest(User $user)
    {
        return !$user->hasActiveRequest() &&
            !$user->hasAcceptedRequest() &&
            $user->is('user');
    }
}
