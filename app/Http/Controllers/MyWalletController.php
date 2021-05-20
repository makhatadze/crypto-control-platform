<?php
/**
 *  app/Http/Controllers/MyWalletController.php
 *
 * Date-Time: 20.05.21
 * Time: 13:27
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyWalletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('module.wallet.index', [
        ]);
    }
}
