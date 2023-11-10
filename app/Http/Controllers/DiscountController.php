<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function show()
    {
        $discount =  Discount::orderBy('discount_percent' , 'DESC')->first();
        return $this->successResponse(data: $discount , message: 'success');
    }
}
