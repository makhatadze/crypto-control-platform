<?php
/**
 *  app/Http/Requests/Auth/RegisterRequest.php
 *
 * Date-Time: 19.05.21
 * Time: 16:09
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|string|max:255|unique:users',
            'password' => 'required|string|max:255|min:8',
        ];
    }
}
