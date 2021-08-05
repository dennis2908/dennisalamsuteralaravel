<?php

namespace App\Http\Controllers;

use App\Models\Torder;
use Illuminate\Http\Request;
use DB;
class TorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Torder::select(['torders.*',DB::raw("concat(mcustomers.code,' - ',mcustomers.name) as customer_cc,mcustomers.address,mcustomers.phone")])->join('mcustomers','mcustomers.id','=','torders.customer_id')->latest()->get();
		
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
			$torder = new Torder;
			$torder->arr_brg  = $request->arr_brg;
			$torder->arr_tot  = $request->arr_tot;
			$torder->arr_price = $request->arr_price;
			$torder->arr_qty  = $request->arr_qty;
			$torder->customer_id  = $request->customer_id;
			$torder->tot_byr = $request->tot_byr;
			$torder->save();

            return response()->json(['success'=>'Added new record.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Torder  $torder
     * @return \Illuminate\Http\Response
     */
    public function show(Torder $torder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Torder  $torder
     * @return \Illuminate\Http\Response
     */
    public function edit(Torder $torder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Torder  $torder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
			$torder = Torder::find($id);
			$torder->arr_brg  = $request->arr_brg;
			$torder->arr_tot  = $request->arr_tot;
			$torder->arr_price = $request->arr_price;
			$torder->arr_qty  = $request->arr_qty;
			$torder->customer_id  = $request->customer_id;
			$torder->tot_byr = $request->tot_byr;
			$torder->save();

            return response()->json(['success'=>'Update existing record.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Torder  $torder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Torder::destroy($id))
             return response()->json(['success'=>'Delete existing record.']);
    }
}
