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
        if ($user->isPoktanLeader()) {
            return $user->poktan_id === $harvest->onfarm->user->poktan_id;
        }

        return $user->id == $harvest->onfarm->user_id;
    }

    public function editStock(User $user, Harvest $harvest)
    {
        if ($user->isPoktanLeader()) {
            return $user->poktan_id === $harvest->onfarm->user->poktan_id;
        }
        
        return $user->id == $harvest->onfarm->user_id && $harvest->initial_stock == $harvest->ending_stock;
    }

    /**
     * Determine whether the user can update the harvest.
     *
     * @param  \App\User  $user
     * @param  \App\Harvest  $harvest
     * @return mixed
     */
    public function updatePostharvest(User $user, Harvest $harvest)
    {
        if ($user->isPoktanLeader()) {
            return $user->poktan_id === $harvest->onfarm->user->poktan_id;
        }

        return $user->id == $harvest->onfarm->user_id;
    }

    /**
     * Determine whether the user can delete the harvest.
     *
     * @param  \App\User  $user
     * @param  \App\Harvest  $harvest
     * @return mixed
     */
    public function deletePostharvest(User $user, Harvest $harvest)
    {
        if ($user->isPoktanLeader()) {
            return $user->poktan_id === $harvest->onfarm->user->poktan_id;
        }

        return $user->id == $harvest->onfarm->user_id;
    }
}
