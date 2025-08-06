<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KhaltiController extends Controller
{
    public function payToKhalti()
    {
        // Logic to redirect to Khalti payment gateway
        $this->processKhaltiPayment();

        return redirect()->route('home')->with('status', 'Redirecting to Khalti...');
    }

    private function processKhaltiPayment()
    {
        // Here you would typically set up the payment details and redirect to Khalti's payment page
        // This is a placeholder for the actual implementation
        // You might use Khalti's SDK or API to initiate the payment
        $transactionUrl = 'https://dev.khalti.com/api/v2/epayment/initiate/';
        $key = '52e9a19de4c04c628754031189347d22'; // Replace with your Khalti public key

        $payload = [
            'return_url' => 'http://127.0.0.1:8000/khalti/callback', // Your callback URL
            'website_url' => 'http://127.0.0.1:8000', // User's mobile number
            'amount' => '2000', // Amount in paisa
            'purchase_order_id' => '1234', // Unique order ID
            'purchase_order_name' => 'Test', // Name of the order
        ];

        $sendToKhalti = Http::timeout(30)->withHeaders([
            'Authorization' => 'Key ' . $key,
        ])->post($transactionUrl, $payload);

        $response = $sendToKhalti->json();

        if ($response && isset($response['pidx']) && isset($response['payment_url'])) {
            // Handle successful payment initiation
            return redirect($response['payment_url']); // Redirect to Khalti's payment page
        } else {
            // Handle error in payment initiation
            return redirect()->route('home')->with('error', 'Payment initiation failed.');
        }
    }

    public function handleKhaltiCallback(Request $request)
    {
        // Logic to handle the callback from Khalti after payment
        // Validate the payment and update the order status accordingly

        return redirect()->route('home')->with('status', 'Payment successful!');
    }
}
