<?php
/**
 *  app/Http/Controllers/UserController.php
 *
 * Date-Time: 18.05.21
 * Time: 13:41
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Requests\WalletRequest;
use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class UsersController
 * @package App\Http\Controllers
 */
class UsersController extends Controller
{


    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
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

    /**
     * Display the specified resource.
     *
     * @param \App\Models\User $user
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(User $user)
    {
        return view('module.users.show', [
            'user' => $user
        ]);
    }


    public function edit(User $user)
    {
        return view('module.users.edit', [
            'user' => $this->userRepository->find($user->id)
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('module.users.create', [
        ]);
    }

    public function store(UserRequest $request) {
        if(!$this->userRepository->save($request)) {

        }

        return redirect(route('userIndex'))->with('success','User added.');

    }

    public function setWallet(User $user, WalletRequest $request)
    {
        if ($request->post()) {
            return $this->userRepository->saveWallet($request->post(), $user);
        }
        return view('module.users.set-wallet', [
            'user' => $this->userRepository->find($user->id)
        ]);
    }

    public function editWallet(User $user)
    {
        return view('module.users.edit-wallet', [
            'user' => $this->userRepository->find($user->id)
        ]);
    }

    public function updateWallet(User $user, WalletRequest $request)
    {
        return $this->userRepository->updateWallet($request->post(), $user);
    }
}
