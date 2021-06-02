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
use App\Mail\StatusChangeMail;
use App\Models\User;
use App\Models\Wallet;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function store(UserRequest $request)
    {
        if (!$this->userRepository->save($request)) {

        }

        return redirect(route('userIndex'))->with('success', 'User added.');

    }

    public function walletCreate(User $user, WalletRequest $request)
    {
        if ($request->post()) {
            $model = new Wallet();

            $model->create([
                'user_id' => $user->id,
                'wallet' => $request['wallet'],
                'status' => $request['status-wallet'],
                'total_balance' => $request['total_balance'],
                'available_balance' => $request['available_balance'],
            ]);

            return redirect(route('userWallets', $user->id))->with('success', 'Wallet created.');

        }
        return view('module.users.set-wallet', [
            'user' => $user
        ]);
    }

    public function editWallet(User $user, Wallet $wallet, WalletRequest $request)
    {
        if ($request->post()) {
            $wallet->update([
                'wallet' => $request['wallet'],
                'status' => $request['status-wallet'],
                'total_balance' => $request['total_balance'],
                'available_balance' => $request['available_balance'],
            ]);

            return redirect(route('userWallets', $user->id))->with('success', 'Wallet updated.');

        }
        return view('module.users.edit-wallet', [
            'user' => $user,
            'wallet' => $wallet
        ]);
    }


    public function userWallets(User $user)
    {
        return view('module.users.wallets', [
            'user' => $this->userRepository->find($user->id)
        ]);
    }

    public function changeStatus(User $user, Request $request)
    {

        if ($request->post()) {
            if ($user->status !== (int)$request->status) {
                $user->update([
                    'status' => $request->status
                ]);

                Mail::to($user->email)
                    ->queue(new StatusChangeMail($request->only('status')));
            }

            return redirect(route('userStatus', $user->id))->with('success', 'Status Updated.');
        }

        return view('module.users.change-status', [
            'user' => $user
        ]);
    }

    public function deleteWallet(User $user, Wallet $wallet)
    {
        if (!$wallet->delete()) {
            return redirect(route('userWallets', $user->id))->with('warning', 'Wallet not deleted.');
        }
        return redirect(route('userWallets', $user->id))->with('success', 'Wallet deleted.');

    }
}
