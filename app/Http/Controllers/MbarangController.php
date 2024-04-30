<?php

namespace App\Http\Controllers;

use App\Models\Mbarang;
use Illuminate\Http\Request;
use Validator;

class MbarangController extends Controller
{
    public function index()
    {
        $data = Mbarang::latest()->get();
		
		return response()->json(['result'=>$data]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

              'name' => 'required|min:3',
			  'code' => 'required|min:3',
			  'price'=>'required|numeric|digits_between:1,10',
			  'qty'=>'required|numeric|digits_between:1,10',
        ]);
		
		
		if ($validator->passes()) {
			
			$mbarang = new Mbarang;
			$mbarang->name  = $request->name;
			$mbarang->code = $request->code;
			$mbarang->price  = $request->price;
			$mbarang->qty  = $request->qty;
			$mbarang->desc  = $request->desc;
			$mbarang->save();

            return response()->json(['success'=>'Added new record.']);

        }

     

        return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [

              'name' => 'required|min:3',
			  'code' => 'required|min:3',
			  'price'=>'required|numeric|digits_between:1,10',
			  'qty'=>'required|numeric|digits_between:1,10',
        ]);
		
		
		if ($validator->passes()) {
			
			$mbarang = Mbarang::find($id);
			$mbarang->name  = $request->name;
			$mbarang->code = $request->code;
			$mbarang->price  = $request->price;
			$mbarang->qty  = $request->qty;
			$mbarang->desc  = $request->desc;
			$mbarang->save();

            return response()->json(['success'=>'Update existing record.']);

        }

     

        return response()->json(['error'=>$validator->errors()->all()]);
    }
    
    public function destroy($id)
    {
        if(Mbarang::destroy($id))
             return response()->json(['success'=>'Delete existing record.']);
    }
}
