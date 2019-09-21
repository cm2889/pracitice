<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        $activeCustomer = Customer::active()->get();

        $customers = Customer::all();

        return view('customer.index ', compact('customers'));

    }

    public function create()
    {
        $companies = Company::all();
        $customer = new Customer();
        return view('customer.create', compact('companies', 'customer'));

    }

    public function store()
    {

        Customer::create($this->validateRequest());
        return redirect('customer');


    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',

        ]);

    }

    public function show(Customer $customer)
    {

        return view('customer.show', compact('customer'));

    }

    public function edit(Customer $customer)
    {
        $companies = Company::all();

        return view('customer.edit', compact('customer', 'companies'));
    }

    public function update(Customer $customer)
    {


        $customer->update($this->validateRequest());

        return redirect('customer/' . $customer->id);

    }
    public function destroy(Customer $customer){
       $customer->delete();
       return redirect('customer');


    }


}
