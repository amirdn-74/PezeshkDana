<?php

namespace App\Policies;

use App\Models\Resource;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ResourcesPolicy
{
    use HandlesAuthorization;

    public function manageResources(User $user)
    {
        return $user->is(['admin', 'super']);
    }
}
