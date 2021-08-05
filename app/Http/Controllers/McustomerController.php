<?php

namespace App\Http\Controllers;

use App\Models\Mcustomer;
use Illuminate\Http\Request;
use Validator;

class McustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mcustomer::latest()->get();
		
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mcustomer  $mcustomer
     * @return \Illuminate\Http\Response
     */
    public function show(Mcustomer $mcustomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mcustomer  $mcustomer
     * @return \Illuminate\Http\Response
     */
    public function edit(Mcustomer $mcustomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mcustomer  $mcustomer
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mcustomer  $mcustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Mcustomer::destroy($id))
             return response()->json(['success'=>'Delete existing record.']);
    }
}
