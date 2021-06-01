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
use App\Http\Requests\Auth\RegisterRequest;
use App\Mail\SignUpMail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{

    /**
     * Show specified view.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function loginView()
    {
        return view('auth.login',[

        ]);
    }

    /**
     * Authenticate login user.
     *
     * @param LoginRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function login(LoginRequest $request)
    {
        if (!\Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'status' => 1
        ])) {
            return back()->with('danger','Email or Password is incorrect!');
        }

        if (auth()->user()->isAdmin()) {
            return redirect('admin');
        }
        return redirect('/');
    }

    /**
     * Show specified view.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function registerView()
    {
        return view('auth.register',[

        ]);
    }

    /**
     * @param \App\Http\Requests\Auth\RegisterRequest $request
     */
    public function register(RegisterRequest $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);
        $data = [
            'email' => $request->email
        ];
        Mail::to($request['email'])
            ->queue(new SignUpMail($data));

        return back()->with('success','Your application submit.');
    }

    public function logout()
    {
        $route = auth()->user()->isAdmin() ? 'loginView' : 'home';
        \Auth::logout();

        return redirect(route($route));
    }
}
