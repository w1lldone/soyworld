<?php

namespace App\Policies;

use App\User;
use App\Onfarm;
use Illuminate\Auth\Access\HandlesAuthorization;

class OnfarmPolicy
{
    use HandlesAuthorization;

    // public function before($user, $ability)
    // {
    //     if ($user->privilage->is_superadmin) {
    //         return true;
    //     }
    // }

    /**
     * Determine whether the user can view the onfarm.
     *
     * @param  \App\User  $user
     * @param  \App\Onfarm  $onfarm
     * @return mixed
     */
    public function view(User $user, Onfarm $onfarm)
    {
        //
    }

    /**
     * Determine whether the user can create onfarms.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    public function createSeed(User $user, Onfarm $onfarm)
    {
        return ($user->id === $onfarm->user->id || $user->isSuperadmin()) && empty($onfarm->seed);
    }

    public function createActivity(User $user, Onfarm $onfarm)
    {
        return (($user->id === $onfarm->user->id) || $user->isSuperadmin()) && !empty($onfarm->planted_at);
    }

    public function createCost(User $user, Onfarm $onfarm)
    {
        return $user->id === $onfarm->user->id || $user->isSuperadmin();
    }

    /**
     * Determine whether the user can update the onfarm.
     *
     * @param  \App\User  $user
     * @param  \App\Onfarm  $onfarm
     * @return mixed
     */
    public function update(User $user, Onfarm $onfarm)
    {
        return ($user->id === $onfarm->user->id) || $user->isSuperadmin();
    }

    /**
     * Determine whether the user can delete the onfarm.
     *
     * @param  \App\User  $user
     * @param  \App\Onfarm  $onfarm
     * @return mixed
     */
    public function delete(User $user, Onfarm $onfarm)
    {
        //
    }
}
