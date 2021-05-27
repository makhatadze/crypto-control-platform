<?php
/**
 *  app/Http/Controllers/VerificationController.php
 *
 * Date-Time: 20.05.21
 * Time: 14:03
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Controllers;

use App\Http\Requests\VerifyRequest;
use App\Models\File;
use App\Models\User;
use App\Models\Verify;
use App\Repositories\VerificationRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class VerificationController
 * @package App\Http\Controllers
 */
class AdminVerificationController extends Controller
{
    /**
     * @var VerificationRepositoryInterface
     */
    private $verificationRepository;

    public function __construct(VerificationRepositoryInterface $verificationRepository)
    {
        $this->verificationRepository = $verificationRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('module.admin-verify.index', [
            'verifications' => $this->verificationRepository->getData($request)
        ]);
    }

    public function edit(Verify $verify)
    {
        $verification = $this->verificationRepository->find($verify->id);
        return view('module.admin-verify.edit', [
            'verification' => $verification,
            'user' => User::where('id', $verification->user_id)->first()
        ]);
    }

    public function update(Verify $verify, Request $request)
    {
        return $this->verificationRepository->update($verify, $request);
    }

}
