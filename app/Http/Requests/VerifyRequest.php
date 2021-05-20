<?php
/**
 *  app/Http/Requests/VerifyRequest.php
 *
 * Date-Time: 20.05.21
 * Time: 15:32
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Http\Requests;

use App\Models\Verify;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class VerifyRequest
 * @package App\Http\Requests
 */
class VerifyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->method() === 'GET') {
            return [];
        }
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'identify' => 'required|in:1,2,3',
            'address' => 'required|string|max:255',
            'file-with-selfie' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            'file-document' => 'required|max:8192',
        ];

        if ((int)$this->identify === Verify::VERIFY_PASSPORT) {
            $rules ['file-passport'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192';
        }
        if ((int)$this->identify == Verify::VERIFY_DRIVING) {
            $rules ['file-driving-back'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192';
            $rules ['file-driving-front'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192';
        }
        if ((int)$this->identify == Verify::VERIFY_NATIONAL) {
            $rules ['file-national-back'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192';
            $rules ['file-national-front'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192';
        }
        return $rules;
    }
}
