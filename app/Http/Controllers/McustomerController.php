<?php

namespace App\Http\Controllers;

use App\Models\Mcustomer;
use Illuminate\Http\Request;
use Validator;

class McustomerController extends Controller
{

    public function index()
    {
        $data = Mcustomer::latest()->get();
		
		return response()->json(['result'=>$data]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

              'name' => 'required|min:3',
			  'code' => 'required|min:3',
			  'phone' => 'required|min:3',
			  'address' => 'required|min:3',
        ]);
		
		
		if ($validator->passes()) {
			
			$mcustomer = new Mcustomer;
			$mcustomer->name  = $request->name;
			$mcustomer->code = $request->code;
			$mcustomer->phone  = $request->phone;
			$mcustomer->address  = $request->address;
			$mcustomer->save();

            return response()->json(['success'=>'Added new record.']);

        }
    }

    public function update(Request $request, $id)
    {
         $validator = Validator::make($request->all(), [

              'name' => 'required|min:3',
			  'code' => 'required|min:3',
			  'phone' => 'required|min:3',
			  'address' => 'required|min:3',
        ]);
		
		
		if ($validator->passes()) {
			
			$mcustomer = Mcustomer::find($id);
			$mcustomer->name  = $request->name;
			$mcustomer->code = $request->code;
			$mcustomer->phone  = $request->phone;
			$mcustomer->address  = $request->address;
			$mcustomer->save();

            return response()->json(['success'=>'Added new record.']);

        }
    }
    
    public function destroy($id)
    {
        if(Mcustomer::destroy($id))
             return response()->json(['success'=>'Delete existing record.']);
    }
}
