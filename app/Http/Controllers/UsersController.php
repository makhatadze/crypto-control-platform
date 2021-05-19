<?php
/**
 *  app/Http/Controllers/UserController.php
 *
 * Date-Time: 18.05.21
 * Time: 13:41
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Controllers;

use App\Models\User;
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

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('module.users.index', [
            'users' => $this->userRepository->getData($request)
        ]);
    }


    public function edit(User $user)
    {
        return view('module.users.edit', [
            'user' => $this->userRepository->find($user->id)
        ]);
    }

    public function setWallet(User $user) {
        return view('module.users.set-wallet', [
            'user' => $this->userRepository->find($user->id)
        ]);
    }
}