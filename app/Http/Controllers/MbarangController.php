<?php

namespace App\Http\Controllers;

use App\Models\Mbarang;
use Illuminate\Http\Request;
use Validator;

class MbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mbarang::latest()->get();
		
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mbarang  $mbarang
     * @return \Illuminate\Http\Response
     */
    public function show(mbarang $mbarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mbarang  $mbarang
     * @return \Illuminate\Http\Response
     */
    public function edit(mbarang $mbarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mbarang  $mbarang
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mbarang  $mbarang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Mbarang::destroy($id))
             return response()->json(['success'=>'Delete existing record.']);
    }
}
