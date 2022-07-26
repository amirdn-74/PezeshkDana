<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminsPolicy
{
    use HandlesAuthorization;

    public function manageAdmins(User $user)
    {
        return $user->is('super');
    }
}
