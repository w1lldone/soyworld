<?php

namespace App\Policies;

use App\User;
use App\Harvest;
use Illuminate\Auth\Access\HandlesAuthorization;

class HarvestPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->isSuperadmin()) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the harvest.
     *
     * @param  \App\User  $user
     * @param  \App\Harvest  $harvest
     * @return mixed
     */
    public function view(User $user, Harvest $harvest)
    {
        //
    }

    /**
     * Determine whether the user can create harvests.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    public function createPostharvest(User $user, Harvest $harvest)
    {
        // return false;
        return $user->id == $harvest->onfarm->user_id;
    }

    /**
     * Determine whether the user can update the harvest.
     *
     * @param  \App\User  $user
     * @param  \App\Harvest  $harvest
     * @return mixed
     */
    public function update(User $user, Harvest $harvest)
    {
        //
    }

    /**
     * Determine whether the user can delete the harvest.
     *
     * @param  \App\User  $user
     * @param  \App\Harvest  $harvest
     * @return mixed
     */
    public function delete(User $user, Harvest $harvest)
    {
        //
    }
}
