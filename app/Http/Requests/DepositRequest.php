<?php
/**
 *  app/Http/Requests/DepositRequest.php
 *
 * Date-Time: 21.05.21
 * Time: 14:01
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepositRequest extends FormRequest
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
        return [
            'amount' => 'required|numeric',
        ];
    }
}
