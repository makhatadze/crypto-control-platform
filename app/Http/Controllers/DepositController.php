<?php
/**
 *  app/Http/Controllers/MyWalletController.php
 *
 * Date-Time: 20.05.21
 * Time: 13:27
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Controllers;

use App\Repositories\DepositRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    /**
     * @var DepositRepositoryInterface
     */
    private $depositRepository;

    public function __construct(DepositRepositoryInterface $depositRepository)
    {
        $this->depositRepository = $depositRepository;
    }

    public function index(Request $request)
    {
        return view('module.deposit.index', [
            'user' => $this->depositRepository->index($request)
        ]);
    }
}
