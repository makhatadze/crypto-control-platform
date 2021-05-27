<?php
/**
 *  app/Repositories/Eloquent/UserRepository.php
 *
 * Date-Time: 19.05.21
 * Time: 10:54
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories\Eloquent;

use App\Http\Requests\UserRequest;
use App\Mail\SignUpMail;
use App\Mail\StatusChangeMail;
use App\Models\User;
use App\Models\Wallet;
use App\Repositories\Eloquent\Base\BaseRepository;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

/**
 * Class UserRepository
 * @package App\Repositories\Eloquent
 */
class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param User $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
        parent::__construct($model);
    }

    /**
     * @param \App\Http\Requests\UserRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(UserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'status' => 1
        ]);

        $model = new Wallet();

        $model = $model->create([
            'user_id' => $user->id,
            'wallet' => $request['wallet'],
            'total_balance' => $request['total_balance'] ?: "",
            'available_balance' => $request['available_balance'] ?: "",
        ]);

        return true;
    }

    public function saveWallet($data, $user)
    {
        $model = new Wallet();

        $model = $model->create([
            'user_id' => $user->id,
            'wallet' => $data['wallet'],
            'total_balance' => $data['total_balance'] ?: "",
            'available_balance' => $data['available_balance'] ?: "",
        ]);

        if ($model && isset($data['status'])) {
            $user->update([
                'status' => $data['status']
            ]);
        }

        Mail::to($user->email)
            ->queue(new StatusChangeMail($data));

        return redirect()->route('userIndex')->with('success', 'Wallet was successfully created');

    }

    public function updateWallet($data, $user)
    {

        $model = Wallet::where(['id' => $user->wallet->id]);

        $model = $model->update([
            'wallet' => $data['wallet'],
            'total_balance' => $data['total_balance'] ?: "",
            'available_balance' => $data['available_balance'] ?: "",
        ]);

        if ($data['status'] != $user->status) {
            Mail::to($user->email)
                ->queue(new StatusChangeMail($data));
        }

        if ($model) {
            $user->update([
                'status' => $data['status']
            ]);
        }

        return redirect()->route('userIndex')->with('success', 'Wallet was successfully updated');

    }

}
