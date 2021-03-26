<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logs;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Mdb\PayPal\Ipn\Event\MessageVerifiedEvent;
use Mdb\PayPal\Ipn\Event\MessageInvalidEvent;
use Mdb\PayPal\Ipn\Event\MessageVerificationFailureEvent;
use Mdb\PayPal\Ipn\ListenerBuilder\Guzzle\InputStreamListenerBuilder as ListenerBuilder;

class IPNController extends Controller
{

    /**
     * Insert logs into database
     * @param string $user_buyer
     * @param string $email_buyer
     * @param string $price
     * @param string $cash
     * @param string $transaction_id
     * @return boolean
     */
    public function insertLogs(string $user_buyer, string $email_buyer, string $price, string $cash, string $transaction_id)
    {
        try {
            $insert = Logs::create([
                'user_buyer' => $user_buyer,
                'email_buyer' => $email_buyer,
                'price' => $price,
                'cash' => $cash,
                'transaction_id' => $transaction_id,
                'date' => Carbon::now()
            ]);
        } catch (\Exception $e) {
            return false;
        }
        if ($insert) {
            return true;
        }
        return false;
    }

    /**
     * Decrement user coins based on what is buying
     *
     * @param string $username
     * @param string $coins
     * @return boolean
     */
    public function updateCoins(string $username, string $coins)
    {
        try {
            $update = User::where('login', $username)->increment('coins', $coins);
        } catch (\Exception $e) {
            return false;
        }
        if ($update) {
            return true;
        }
        return false;
    }


    /**
     * Handle Paypal response
     * @param Illuminate\Http\Request $request
     * @return void
     */
    public function ipn(Request $request)
    {
        Log::info('FUNCTION STARTED');

        if (env('PAYPAL_SANDBOX')) {
            $listenerBuilder = new ListenerBuilder();
            $listenerBuilder->useSandbox();
            $listener = $listenerBuilder->build();
        } else {
            $listener = (new ListenerBuilder())->build();
        }

        $listener->onVerified(function (MessageVerifiedEvent $event) {
            $ipnMessage = $event->getMessage();
            Log::info('--VERIFIED--');
            Log::info($ipnMessage);
            Log::info($ipnMessage->get('custom'));
            $this->insertLogs(
                strval($ipnMessage->get('custom')),
                strval($ipnMessage->get('payer_email')),
                strval($ipnMessage->get('mc_gross')),
                strval(getCashValue($ipnMessage->get('item_number'))),
                strval($ipnMessage->get('txn_id'))
            );
            $this->updateCoins($ipnMessage->get('custom'), getCashValue($ipnMessage->get('item_number')));
            Log::info(Logs::all());
        });

        $listener->onInvalid(function (MessageInvalidEvent $event) {
            $ipnMessage = $event->getMessage();
            Log::info('-- IPN INVALID: LOG --');
            Log::info($ipnMessage);
        });

        $listener->onVerificationFailure(function (MessageVerificationFailureEvent $event) {
            $error = $event->getError();
            Log::info('-- IPN ERROR: LOG --');
            Log::info($error);
        });

        $listener->listen();
    }
}
