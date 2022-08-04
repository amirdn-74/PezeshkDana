<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoriesPolicy
{
    use HandlesAuthorization;

    public function manageCategories(User $user)
    {
        return $user->is(['admin', 'super']);
    }
}
