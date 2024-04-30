<?php

namespace App\Http\Controllers;

use App\Models\Mrole;
use Illuminate\Http\Request;
use Validator;

class MroleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mrole::latest()->get();
		
		return response()->json(['result'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

              'role_name' => 'required|min:3'
        ]);
		
		
		if ($validator->passes()) {
			
			$mrole = new Mrole;
			$mrole->role_name  = $request->role_name;
			$mrole->save();

            return response()->json(['success'=>'Added new record.']);

        }

     

        return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [

              'role_name' => 'required|min:3',
		]);
		
		
		if ($validator->passes()) {
			
			$mrole = Mrole::find($id);
			$mrole->role_name  = $request->role_name;
			$mrole->save();

            return response()->json(['success'=>'Update existing record.']);

        }

     

        return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function updateAssign(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [

        	  'role_assign' => 'required|min:3',
        ]);
		
		
		if ($validator->passes()) {
			
			$mrole = Mrole::find($id);
			$mrole->role_assign  = $request->role_assign;
			$mrole->save();

            return response()->json(['success'=>'Update existing record.']);

        }

     

        return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function destroy($id)
    {
        if(Mrole::destroy($id))
             return response()->json(['success'=>'Delete existing record.']);
    }
}
