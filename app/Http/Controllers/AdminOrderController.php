<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index(){
        return view('admin.order.index', [
            'orders' => Order::orderBy('id', 'desc')->get()
        ]);
    }
}
