<?php

namespace App\Http\Controllers;

use App\Models\Torder;
use Illuminate\Http\Request;
use DB;
class TorderController extends Controller
{
    public function index()
    {
        $data = Torder::select(['torders.*',DB::raw("concat(mcustomers.code,' - ',mcustomers.name) as customer_cc,mcustomers.address,mcustomers.phone")])->join('mcustomers','mcustomers.id','=','torders.customer_id')->latest()->get();
		
		return response()->json(['result'=>$data]);
    }

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

    public function destroy($id)
    {
        if(Torder::destroy($id))
             return response()->json(['success'=>'Delete existing record.']);
    }
}
