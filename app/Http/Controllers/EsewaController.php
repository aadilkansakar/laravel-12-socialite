<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EsewaController extends Controller
{
    public function payToEsewa()
    {
        dd('here');
        // Logic to redirect to eSewa payment gateway
        return redirect()->route('home')->with('status', 'Redirecting to eSewa...');
    }

    public function handleEsewaCallback(Request $request)
    {
        // Logic to handle the callback from eSewa after payment
        // Validate the payment and update the order status accordingly

        return redirect()->route('home')->with('status', 'Payment successful!');
    }
}
