<?php

namespace App\Policies;

use App\Models\Request;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RequestsPolicy
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

    public function watch(User $user, Request $request)
    {
        return $user->is(['admin', 'super']);
    }

    public function modify(User $user, Request $request)
    {
        return $user->is(['admin', 'super']) && $request->isModifyable();
    }
}
