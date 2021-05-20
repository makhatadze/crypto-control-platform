<?php
/**
 *  app/Repositories/Eloquent/UserRepository.php
 *
 * Date-Time: 19.05.21
 * Time: 10:54
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories\Eloquent;

use App\Mail\SignUpMail;
use App\Mail\StatusChangeMail;
use App\Models\User;
use App\Models\Wallet;
use App\Repositories\Eloquent\Base\BaseRepository;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
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
        parent::__construct($model);
    }

    public function saveWallet($data, $user)
    {
        $model = new Wallet();

        $model = $model->create([
            'user_id' => $user->id,
            'wallet' => $data['wallet'],
            'total_balance' => $data['total_balance'],
            'available_balance' => $data['available_balance'],
        ]);

        $user->update([
            'status' => $data['status']
        ]);

        Mail::to($user->email)
            ->queue(new StatusChangeMail($data));

        return redirect()->route('userIndex')->with('success', 'Wallet was successfully created');

    }

    public function updateWallet($data, $user)
    {

        $model = Wallet::where(['id' => $user->wallet->id]);

        $model = $model->update([
            'wallet' => $data['wallet'],
            'total_balance' => $data['total_balance'],
            'available_balance' => $data['available_balance'],
        ]);

        if ($data['status'] != $user->status) {
            Mail::to($user->email)
                ->queue(new StatusChangeMail($data));
        }

        $user->update([
            'status' => $data['status']
        ]);

        return redirect()->route('userIndex')->with('success', 'Wallet was successfully updated');

    }

}
