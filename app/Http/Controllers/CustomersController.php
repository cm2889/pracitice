<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
  public function index (){
      $companies=Company::all();

      $activeCustomer = Customer::active()->get();

       $customers=Customer::all();

      return view('customers.index ', compact('customers'));

  }
 public function create(){
     $companies=Company::all();
return view('customers.create',compact('companies'));

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
      return redirect('customer');


  }
  public function show( Customer $customer){

     
      return view('customers.show',compact('customer'));

  }



}
