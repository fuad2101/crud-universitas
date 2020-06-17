<?php

namespace App\Policies;

use App\Jurusan;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class JurusanPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any jurusans.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the jurusan.
     *
     * @param  \App\User  $user
     * @param  \App\Jurusan  $jurusan
     * @return mixed
     */
    public function view(User $user, Jurusan $jurusan)
    {
        //
    }

    /**
     * Determine whether the user can create jurusans.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the jurusan.
     *
     * @param  \App\User  $user
     * @param  \App\Jurusan  $jurusan
     * @return mixed
     */
    public function update(User $user, Jurusan $jurusan)
    {
        //
    }

    /**
     * Determine whether the user can delete the jurusan.
     *
     * @param  \App\User  $user
     * @param  \App\Jurusan  $jurusan
     * @return mixed
     */
    public function delete(User $user, Jurusan $jurusan)
    {
        //
    }

    /**
     * Determine whether the user can restore the jurusan.
     *
     * @param  \App\User  $user
     * @param  \App\Jurusan  $jurusan
     * @return mixed
     */
    public function restore(User $user, Jurusan $jurusan)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the jurusan.
     *
     * @param  \App\User  $user
     * @param  \App\Jurusan  $jurusan
     * @return mixed
     */
    public function forceDelete(User $user, Jurusan $jurusan)
    {
        //
    }
}
