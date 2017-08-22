<?php

namespace App\Policies;

use App\User;
use App\OnfarmCost;
use Illuminate\Auth\Access\HandlesAuthorization;

class OnfarmCostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the onfarmCost.
     *
     * @param  \App\User  $user
     * @param  \App\OnfarmCost  $onfarmCost
     * @return mixed
     */
    public function view(User $user, OnfarmCost $onfarmCost)
    {
        //
    }

    /**
     * Determine whether the user can create onfarmCosts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the onfarmCost.
     *
     * @param  \App\User  $user
     * @param  \App\OnfarmCost  $onfarmCost
     * @return mixed
     */
    public function update(User $user, OnfarmCost $onfarmCost)
    {
        //
    }

    /**
     * Determine whether the user can delete the onfarmCost.
     *
     * @param  \App\User  $user
     * @param  \App\OnfarmCost  $onfarmCost
     * @return mixed
     */
    public function delete(User $user, OnfarmCost $onfarmCost)
    {
        //
    }
}
