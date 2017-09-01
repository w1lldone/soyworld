<?php

namespace App\Policies;

use App\User;
use App\Postharvest;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostharvestPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->isSuperadmin()) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the postharvest.
     *
     * @param  \App\User  $user
     * @param  \App\Postharvest  $postharvest
     * @return mixed
     */
    public function view(User $user, Postharvest $postharvest)
    {
        return true;
    }

    /**
     * Determine whether the user can create postharvests.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->privilage_id === 2;
    }

    /**
     * Determine whether the user can update the postharvest.
     *
     * @param  \App\User  $user
     * @param  \App\Postharvest  $postharvest
     * @return mixed
     */
    public function update(User $user, Postharvest $postharvest)
    {
        return $user->id === $postharvest->harvest->onfarm->user_id;
    }

    /**
     * Determine whether the user can delete the postharvest.
     *
     * @param  \App\User  $user
     * @param  \App\Postharvest  $postharvest
     * @return mixed
     */
    public function delete(User $user, Postharvest $postharvest)
    {
        return $user->id === $postharvest->harvest->onfarm->user_id;
    }
}
