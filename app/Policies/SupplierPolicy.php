<?php

namespace App\Policies;

use App\User;
use App\Supplier;
use Illuminate\Auth\Access\HandlesAuthorization;

class SupplierPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->isSuperadmin()) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the supplier.
     *
     * @param  \App\User  $user
     * @param  \App\Supplier  $supplier
     * @return mixed
     */
    public function view(User $user, Supplier $supplier)
    {
        //
    }

    /**
     * Determine whether the user can create suppliers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->privilage_id === 2;
    }

    /**
     * Determine whether the user can update the supplier.
     *
     * @param  \App\User  $user
     * @param  \App\Supplier  $supplier
     * @return mixed
     */
    public function update(User $user, Supplier $supplier)
    {
        return $supplier->poktan_id === $user->poktan_id;
    }

    /**
     * Determine whether the user can delete the supplier.
     *
     * @param  \App\User  $user
     * @param  \App\Supplier  $supplier
     * @return mixed
     */
    public function delete(User $user, Supplier $supplier)
    {
        //
    }
}
