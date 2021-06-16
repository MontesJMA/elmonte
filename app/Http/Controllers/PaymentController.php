<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }


    public function payment()
    {
        $availablePlans =[
            'price_1J1sikJHwnDW5zlj8qycpW2I' => "Mensual - 14,99 €",
            'webdevmatics_yearly' => "Anual - 99,99 €",
        ];
        $data = [
            'intent' => auth()->user()->createSetupIntent(),
            'plans'=> $availablePlans
        ];
        return view('payment1')->with($data);
    }


    public function subscribe(Request $request)
    {
        $user = auth()->user();

    $paymentMethod = $request->payment_method;

        $planId = $request->plan;

        if ($user->subscribed('main')) {
            return response([  'success_url' => redirect()->intended('/payment')->getTargetUrl(),
                ]);
        }else {

            $user->newSubscription('main', $planId)->create($paymentMethod);

            return response([
                'success_url' => redirect()->intended('/dashboard')->getTargetUrl(),
                'message' => 'success'
            ]);
        }
    }
}
