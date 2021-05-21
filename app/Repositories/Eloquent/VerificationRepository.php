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
use App\Mail\VerificationStatusMail;
use App\Models\User;
use App\Models\Verify;
use App\Models\Wallet;
use App\Repositories\Eloquent\Base\BaseRepository;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\VerificationRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

/**
 * Class UserRepository
 * @package App\Repositories\Eloquent
 */
class VerificationRepository extends BaseRepository implements VerificationRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Verify $model
     */
    public function __construct(Verify $model)
    {
        parent::__construct($model);
    }

    public function update($verification, $data)
    {
        $user = User::where(['id' => $verification->user_id])->first();


        $status = $verification->status;

        $verification = $verification->update([
            'status' => $data['status'] ?: "0"
        ]);

        $text = 'Verification status was not changed';
        $type = 'danger';

        if ($verification) {
            $model = $user->update([
                'verify' => $data['status'] ?: "0"
            ]);
            if ($model) {
                $text = 'Verification status was successfully changed';
                $type = 'success';
            }

            if ($data['status'] != $status) {
                Mail::to($user->email)
                    ->queue(new VerificationStatusMail($data->all()));
            }
        }
        return redirect()->route('adminVerifyIndex')->with($type, $text);


    }

}
