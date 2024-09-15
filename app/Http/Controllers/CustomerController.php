<?php

namespace App\Http\Controllers;

// import customer models
use App\Models\Customer;

// import view
use Illuminate\View\View;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //menampilkan data
    public function index() : View{
        $customers = Customer::latest()->paginate(10);

        return view('customers.index', compact('customers'));
    }

}
