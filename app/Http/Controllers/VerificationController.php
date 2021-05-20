<?php
/**
 *  app/Http/Controllers/VerificationController.php
 *
 * Date-Time: 20.05.21
 * Time: 14:03
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class VerificationController
 * @package App\Http\Controllers
 */
class VerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('module.verify.index', [
            'user' => auth()->user()
        ]);
    }}
