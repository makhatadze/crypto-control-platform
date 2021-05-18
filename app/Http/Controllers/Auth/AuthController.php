<?php
/**
 *  app/Http/Controllers/Auth/AuthController.php
 *
 * Date-Time: 18.05.21
 * Time: 11:40
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller
{

    /**
     * Show specified view.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function loginView()
    {
        return view('admin.auth.login',[

        ]);
    }

    /**
     * Authenticate login user.
     *
     * @param LoginRequest $request
     *
     * @return void
     * @throws \Exception
     */
    public function login(LoginRequest $request): void
    {
        if (!\Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            throw new \RuntimeException('Wrong email or password.');
        }
    }

    public function logout()
    {
        \Auth::logout();
        return redirect(route('loginView'));
    }
}