<?php
/**
 *  app/Traits/HasRolesAndPermissions.php
 *
 * Date-Time: 18.05.21
 * Time: 12:52
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Traits;

use App\Models\Role;

trait HasRolesAndPermissions
{
    /**
     * @return boolean
     */
    public function isAdmin(): bool
    {
        return $this->roles->contains('slug', 'admin');
    }

    /**
     *
     * @return mixed
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'users_roles');
    }

    /**
     * Check if the user has Role
     *
     * @param [type] $role
     *
     * @return boolean
     */
    public function hasRole($role)
    {
        if (null === $this->roles) {
            return false;
        }
        if (strpos($role, ',') !== false) {//check if this is an list of roles

            $listOfRoles = explode(',', $role);

            foreach ($listOfRoles as $role) {
                if ($this->roles->contains('slug', $role)) {
                    return true;
                }
            }
        } else {
            if ($this->roles->contains('slug', $role)) {
                return true;
            }
        }

        return false;
    }
}