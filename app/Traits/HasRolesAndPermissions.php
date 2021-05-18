<?php
/**
 *  app/Traits/HasRolesAndPermissions.php
 *
 * Date-Time: 18.05.21
 * Time: 12:52
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Traits;

trait HasRolesAndPermissions
{
    /**
     * @return boolean
     */
    public function isAdmin(): bool
    {
        return $this->roles->contains('slug', 'admin');
    }
}