<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaOrderController extends Controller
{
    public function showForm()
    {
        return view('order');
    }

    public function calculateBill(Request $request)
    {
        // Prices
        $prices = [
            'small' => 15,
            'medium' => 22,
            'large' => 30,
            'pepperoni_small' => 3,
            'pepperoni_medium' => 5,
            'pepperoni_large' => 7,  // Updated price for large pepperoni
            'extra_cheese' => 6,
        ];

        // Order details
        $size = $request->input('size');
        $pepperoni = $request->input('pepperoni', false);
        $extraCheese = $request->input('extra_cheese', false);

        // Calculate the base price
        $basePrice = $prices[$size];
        $pepperoniPrice = 0;
        $extraCheesePrice = 0;

        // Calculate pepperoni price
        if ($pepperoni) {
            if ($size === 'small') {
                $pepperoniPrice = $prices['pepperoni_small'];
            } elseif ($size === 'medium') {
                $pepperoniPrice = $prices['pepperoni_medium'];
            } elseif ($size === 'large') {
                $pepperoniPrice = $prices['pepperoni_large'];
            }
        }

        // Calculate extra cheese price
        if ($extraCheese) {
            $extraCheesePrice = $prices['extra_cheese'];
        }

        // Total bill calculation
        $totalAmount = $basePrice + $pepperoniPrice + $extraCheesePrice;

        // Return the result view with detailed breakdown
        return view('result', [
            'total_amount' => number_format($totalAmount, 2),
        ]);
    }
}
