<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    //
    public function login(Request $request){
        $data = $request->only('gmail', 'password');

        $customer = Customer::where('gmail', $data['gmail'])->first();
        if (empty($customer)) {
            return redirect()->back()->with(['status' => 'fail', 'message' => 'Đăng nhập thất bại']);
        }
        return redirect()->to(route('store'));
//        if (Auth::guard('web')->attempt($data)) {
//            return redirect()->to(route('store'));
//        }

//        return redirect()->back()->with(['status' => 'fail', 'message' => 'Đăng nhập thất bại']);
    }
    public function updateProfile(){
        $customer = Customer::first();
        return view('customer.info',['customer' => $customer]);
    }

    public function updateCustomer(Request $request, $id){
        $customer = Customer::findOrFail($id);
        $data = $request->all();
        $customer->update($data);
        return redirect()->route('updateProfile')->with('success', 'Xóa dữ liệu thành công');

    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->to(route('login'));
    }

    public function register(Request $request){
        $data = $request->all();
        $validate = Validator::make($data,[
            'gmail' => 'unique:customers,gmail,' . $request->input('id') ?? null,
        ]);
        if (!$validate->passes() || $data['password'] != $data['repassword']){
            return redirect()->back()->with(['status' => 'success', 'message' => 'Đăng kí thành công']);
        }
        return redirect()->back()->with(['status' => 'fail', 'message' => 'Đăng kí thất bại']);
    }

}
