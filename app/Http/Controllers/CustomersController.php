<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
  public function list (){

      $activeCustomer = Customer::active()->get();
      $inactiveCustomer = Customer::inactive()->get();
      $companies=Company::all();


      return view('customer', compact('activeCustomer','inactiveCustomer','companies'));

  }

  public function store()
  {

      $data= request()->validate([
          'name'=>'required|min:3',
          'email'=>'required|email',
          'active'=>'required',
          'company_id'=>'required',
      ]);
    Customer::create($data);
      return back();


  }

}
