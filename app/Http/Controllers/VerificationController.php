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
    public function index(VerifyRequest $request)
    {
        if ($request->post()) {
            $model = new Verify([
                'user_id' => auth()->user()->id,
                'name' => $request->name,
                'email' => $request->email,
                'address' => (int)$request->address,
                'status' => Verify::VERIFY_PENDING
            ]);

            $model->save();

            switch ((int)$request->identify) {
                case 1:
                    if ($request->hasFile('file-passport')) {
                        $file = $request->file('file-passport');
                        $imagename = date('Ymhs') . $file->getClientOriginalName();
                        $destination = base_path() . '/storage/app/public/file/' . $model->id;
                        $file->move($destination, $imagename);
                        $model->filePassport()->create([
                            'name' => $imagename,
                            'path' => '/storage/app/public/file/' . $model->id,
                            'format' => $file->getClientOriginalExtension(),
                            'type' => File::FILE_PASSPORT
                        ]);
                    }
                    break;
                case 2:
                    if ($request->hasFile('file-driving-back')) {
                        $file = $request->file('file-driving-back');
                        $imagename = date('Ymhs') . $file->getClientOriginalName();
                        $destination = base_path() . '/storage/app/public/file/' . $model->id;
                        $file->move($destination, $imagename);
                        $model->fileDrivingBack()->create([
                            'name' => $imagename,
                            'path' => '/storage/app/public/file/' . $model->id,
                            'format' => $file->getClientOriginalExtension(),
                            'type' => File::FILE_DRIVING_BACK
                        ]);
                    }
                    if ($request->hasFile('file-driving-front')) {
                        $file = $request->file('file-driving-front');
                        $imagename = date('Ymhs') . $file->getClientOriginalName();
                        $destination = base_path() . '/storage/app/public/file/' . $model->id;
                        $file->move($destination, $imagename);
                        $model->fileDrivingFront()->create([
                            'name' => $imagename,
                            'path' => '/storage/app/public/file/' . $model->id,
                            'format' => $file->getClientOriginalExtension(),
                            'type' => File::FILE_DRIVING_FRONT
                        ]);
                    }
                    break;
                case 3:
                    if ($request->hasFile('file-national-back')) {
                        $file = $request->file('file-national-back');
                        $imagename = date('Ymhs') . $file->getClientOriginalName();
                        $destination = base_path() . '/storage/app/public/file/' . $model->id;
                        $file->move($destination, $imagename);
                        $model->fileNationalBack()->create([
                            'name' => $imagename,
                            'path' => '/storage/app/public/file/' . $model->id,
                            'format' => $file->getClientOriginalExtension(),
                            'type' => File::FILE_NATIONAL_BACK
                        ]);
                    }
                    if ($request->hasFile('file-national-front')) {
                        $file = $request->file('file-national-front');
                        $imagename = date('Ymhs') . $file->getClientOriginalName();
                        $destination = base_path() . '/storage/app/public/file/' . $model->id;
                        $file->move($destination, $imagename);
                        $model->fileNationalFront()->create([
                            'name' => $imagename,
                            'path' => '/storage/app/public/file/' . $model->id,
                            'format' => $file->getClientOriginalExtension(),
                            'type' => File::FILE_NATIONAL_FRONT
                        ]);
                    }

            }

            if ($request->hasFile('file-with-selfie')) {
                $file = $request->file('file-with-selfie');
                $imagename = date('Ymhs') . $file->getClientOriginalName();
                $destination = base_path() . '/storage/app/public/file/' . $model->id;
                $file->move($destination, $imagename);
                $model->fileWithSelfie()->create([
                    'name' => $imagename,
                    'path' => '/storage/app/public/file/' . $model->id,
                    'format' => $file->getClientOriginalExtension(),
                    'type' => File::FILE_WITH_SELFIE
                ]);
            }

            if ($request->hasFile('file-document')) {
                $file = $request->file('file-document');
                $imagename = date('Ymhs') . $file->getClientOriginalName();
                $destination = base_path() . '/storage/app/public/file/' . $model->id;
                $file->move($destination, $imagename);
                $model->fileDocument()->create([
                    'name' => $imagename,
                    'path' => '/storage/app/public/file/' . $model->id,
                    'format' => $file->getClientOriginalExtension(),
                    'type' => File::FILE_DOCUMENT
                ]);
            }

            User::where('id', auth()->user()->id)
                ->update(['verify' => 2]);

            return redirect(route('verifyIndex'))->with('success', 'Verification send!');
        }
        return view('module.verify.index', [
            'user' => auth()->user()
        ]);
    }


    public function changeVerification(User $user, Request $request)
    {
        if ($request->post()) {
            $user->update([
                'verify' => $request->status,
                'liquidity' => $request->liquidity
            ]);

            if ($user->verify === 2 && $user->verifySuccess !== null) {
                $user->verifySuccess()->update([
                    'status' => 0
                ]);
            }
            return redirect(route('userIndex'))->with('success', 'Change verification');
        }

        return view('module.verify.edit', [
            'user' => $user
        ]);
    }
}

