<?php

namespace App\Policies;

use App\Models\Habitat;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class HabitatPolicy
{
    public function before(User $user){
        if ($user->hasRole('admin')) {
            return true;
        }
    }
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole('zookeeper' , 'customer') && $user->can('can_view-any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Habitat $habitat): bool
    {
        return $user->hasAnyRole('zookeeper' , 'customer') && $user->can('can_view', $habitat);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('can_create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Habitat $habitat): bool
    {
        return $user->hasAnyRole('zookeeper') && $user->can('can_update', $habitat);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Habitat $habitat): bool
    {
        return $user->can('can_delete', $habitat);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Habitat $habitat): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Habitat $habitat): bool
    {
        return false;
    }
}
