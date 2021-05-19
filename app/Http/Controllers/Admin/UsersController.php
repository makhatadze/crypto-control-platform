<?php
/**
 *  app/Http/Controllers/Admin/UserController.php
 *
 * Date-Time: 18.05.21
 * Time: 13:41
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;

class UsersController extends Controller
{


    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function index(Request $request)
    {
        return view('admin.module.users.index', [
            'users' => $this->userRepository->getData($request)
        ]);
    }
}