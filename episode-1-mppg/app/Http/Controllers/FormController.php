<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{

    /**
     * Validate information provide by the user
     * @param array $form
     * @return boolean
     */
    public function formIsValid(array $form)
    {
        // Validating Request
        $validator = Validator::make($form, [
            'username' => 'required|string',
            'product' => 'required|string'
        ]);

        // If validation fails then return false
        if ($validator->fails()) {
            return false;
        }
        return true;
    }

    /**
     * Check if the user exists in the game database
     * @param string $username
     * @return boolean
     */
    public function existsUser(string $username)
    {
        // Try database connection to retrieve user information
        // if fails then return false
        try {
            $user = User::select('id', 'login')->where('login', $username)->first();
        } catch (\Exception $e) {
            return false;
        }

        // If user is found then return true or else return false
        if ($user) {
            return true;
        }
        return false;
    }

    /**
     * Handle and submit the form pre-constructed
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function handleForm(Request $request)
    {
        if (
            $this->formIsValid($request->only('username', 'product')) &&
            $this->existsUser($request->username)
        ) {
            $form =
                '?business=' . env('PAYPAL_SELLER_EMAIL') . '&
                item_name=' . env('PAYPAL_ITEM_SELLING') . '&
                amount=' . $request->product . '&
                cmd=_xclick&
                no_note=1&
                no_shipping=1&
                rm=2&
                currency_code=' . env('PAYPAL_CURRENCY_CODE') . '&
                bn=PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest&
                first_name=' . $request->username . '&
                return=' . route('app.home') . '&
                cancel_return=' . route('app.home') . '&
                notify_url=' . env('PAYPAL_IPN_URL') . '&
                item_number=' . $request->product . '&
                custom=' . $request->username . '
            ';
            $form = preg_replace('/\s*/m', '', $form);
            return redirect((env('PAYPAL_SANDBOX') ? env('PAYPAL_IPN_SANDBOX_URL') : env('PAYPAL_IPN_LIVE_URL')) . $form);
        } else {
            return redirect()
                ->back()
                ->with('alert_message', ['message' => 'The information you have entered cannot be validated or the username does not exists, please complete the form correctly.', 'alert_type' => 'danger']);
        }
    }
}
