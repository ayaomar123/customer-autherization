<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        //$this->authorize('viewAny',Customer::class);
        $customer = Customer::all();
        return view('customers.index',compact('customer'));
    }




    public function create()
    {
        $this->authorize('create',Customer::class);
        return view('customers.create');
    }

    public function store(Request $request){
        $this->authorize('create',Customer::class);
        $this->validate($request,[
            'name'=>'required',
            'image'=>'required',
            'email'=>'required|unique:customers',
            'password'=>'required|min:6',
            'confpassword'=>'required|same:password',
            'phone'=>'required'
        ]);
        $customer = new Customer();
        $data = $request->only($customer->getFillable());
        $data['password'] = bcrypt($request->password);
        Customer::query()->create($data);
        return redirect(route('index'));

    }

    public function edit($id){
        $customer = Customer::find($id);

        $user = Auth::user();
//        if(!$user->can('update',$customer)){
//            abort(403);
//        }
        $this->authorize('update',$customer);
        if(!$customer){
            abort(404);  //page not found
        }
        return view('customers.edit',['customer' => $customer]);

    }

    public function update(Request $request, $id){
        $customer = Customer::find($id);
        $this->authorize('update',$customer);
        $data = $request->only($customer->getFillable());
        $data['password'] = bcrypt($request->password);
        $data['confpassword'] = bcrypt($request->confpassword);
        $customer->update($data);
        return redirect(route('index'));

    }

    public function delete($id){
        $customer = Customer::findOrFail($id);
        $this->authorize('delete',$customer);
        $customer->delete();
        return redirect(route('index'));

    }

}
