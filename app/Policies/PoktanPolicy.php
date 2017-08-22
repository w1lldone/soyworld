<?php

namespace App\Policies;

use App\User;
use App\Poktan;
use Illuminate\Auth\Access\HandlesAuthorization;

class PoktanPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->isSuperadmin()) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the poktan.
     *
     * @param  \App\User  $user
     * @param  \App\Poktan  $poktan
     * @return mixed
     */
    public function view(User $user, Poktan $poktan)
    {
        //
    }

    /**
     * Determine whether the user can create poktans.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the poktan.
     *
     * @param  \App\User  $user
     * @param  \App\Poktan  $poktan
     * @return mixed
     */
    public function update(User $user, Poktan $poktan)
    {
        //
    }

    /**
     * Determine whether the user can delete the poktan.
     *
     * @param  \App\User  $user
     * @param  \App\Poktan  $poktan
     * @return mixed
     */
    public function delete(User $user, Poktan $poktan)
    {
        //
    }
}
