<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Redirect;
use Random\RandomError;


class RegistrationController extends Controller
{
    public function index()
    {
        $url = url('/customer');
        $title = "Customer Registration";
        $data = compact('url', 'title');

        return view('form')->with($data);
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|unique:customer',
                'email' => 'required|unique:customer|email',
            ]

        );

        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->save();

        return Redirect('/customer/view');

    }

    public function view()
    {
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }

    public function delete($id)
    {
        $customer = Customer::find($id);

        if (!is_null($customer)) {

            $customer->delete();

        }
        return redirect('customer/view');

    }

    public function edit($id)
    {
        $customer = Customer::find($id);

        if (is_null($customer)) {
            return redirect('customer/view');
        } else {
            $title = "Update Customer";
            $url = url('/customer/update') . "/" . $id;
            $data = compact('customer', 'url', 'title');
            return view('form')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->save();

        return redirect('customer/view');
    }
}