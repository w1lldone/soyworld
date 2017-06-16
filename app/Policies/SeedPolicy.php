<?php

namespace App\Policies;

use App\User;
use App\Seed;
use App\Onfarm;
use Illuminate\Auth\Access\HandlesAuthorization;

class SeedPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->privilage->is_superadmin) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the seed.
     *
     * @param  \App\User  $user
     * @param  \App\Seed  $seed
     * @return mixed
     */
    public function view(User $user, Seed $seed)
    {
        //
    }

    /**
     * Determine whether the user can create seeds.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user, Onfarm $onfarm)
    {
        return $user->id === $onfarm->user->id;
    }

    /**
     * Determine whether the user can update the seed.
     *
     * @param  \App\User  $user
     * @param  \App\Seed  $seed
     * @return mixed
     */
    public function update(User $user, Seed $seed)
    {
        //
    }

    /**
     * Determine whether the user can delete the seed.
     *
     * @param  \App\User  $user
     * @param  \App\Seed  $seed
     * @return mixed
     */
    public function delete(User $user, Seed $seed)
    {
        //
    }
}
