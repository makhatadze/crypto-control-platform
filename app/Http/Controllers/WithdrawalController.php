<?php
/**
 *  app/Http/Controllers/WithdrawalController.php
 *
 * Date-Time: 21.05.21
 * Time: 14:18
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Controllers;

use App\Http\Requests\DepositRequest;
use App\Mail\DepositMail;
use App\Mail\WithdrawalMail;
use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WithdrawalController extends Controller
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

            Mail::to(env('DB_ADMIN_USERNAME'))
                ->queue(new WithdrawalMail($data));

            return back()->with('success', 'Withdrawal successfully created');

        }

        return view('module.withdrawal.index', [
            'user' => auth()->user()
        ]);
    }
}
