<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class WalletRequest extends FormRequest
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


        if ($this->status == User::USER_ACTIVE) {
            $rules = [
                'wallet' => ['required','string','max:255', Rule::unique('wallets','wallet')->ignore($this->wallet)],
                'total_balance' => 'required|numeric',
                'available_balance' => 'required|numeric'
            ];
        }
        else{
            $rules = [
                'wallet' => ['string', 'max:255', Rule::unique('wallets')->ignore($this->wallet,'wallet'),'nullable'],
                'total_balance' => 'numeric|nullable',
                'available_balance' => 'numeric|nullable'
            ];
        }
        return $rules;
    }
}
