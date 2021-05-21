<?php
/**
 *  app/Repositories/UserRepositoryInterface.php
 *
 * Date-Time: 19.05.21
 * Time: 10:53
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories;

use Illuminate\Http\Request;

/**
 * Interface UserRepositoryInterface
 * @package App\Repositories
 */
interface DepositRepositoryInterface
{
    /**
     * @param Request $request
     */

    public function index(Request $request);

}
