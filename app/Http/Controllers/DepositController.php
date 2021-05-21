<?php
/**
 *  app/Http/Controllers/MyWalletController.php
 *
 * Date-Time: 20.05.21
 * Time: 13:27
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Controllers;

use App\Http\Requests\DepositRequest;
use App\Mail\DepositMail;
use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DepositController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index(DepositRequest $request)
    {

        if ($request->post()) {
            $user = auth()->user();
            $model = new Deposit();
            $model->user_id = $user->id;
            $model->amount = $request->amount;
            $model->save();

            $data = [
                'full_name' => $user->name,
                'email' => $user->email,
                'amount' => $request->amount
            ];
            var_dump(env('SUPPORT_EMAIL'));
            exit();
            Mail::to(env('SUPPORT_EMAIL'))
                ->queue(new DepositMail($data));

            return back()->with('success', 'Deposit successfully created');

        }

        return view('module.deposit.index', [
            'user' => auth()->user()
        ]);
    }
}
