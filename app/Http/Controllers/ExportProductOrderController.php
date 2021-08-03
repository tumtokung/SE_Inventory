<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExportProductOrder;

use App\Models\ExportOrder;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExportProductOrderController extends Controller
{
    //
    public function index()
    {
        $exportproductorders = ExportProductOrder::all();
        return view('ExportProduct.Order.index',compact('exportproductorders'));
    }

    public function create()
    {
        // return view('ExportProduct.Order.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'id_product'=>'required|max:6|Exists:products',
        //     'quantity'=>'required|min:0',
        // ],
        // [
        //     'id_product.required'=>"โปรดกรอกรหัส",
        //     'id_product.max'=>"รหัสมี 6 ตัว",
        //     'id_product.exists'=>"ไม่มีสินค้านี้",
        //     'id_product.unique'=>"มีสินค้าอยู่ในรายการอยู่แล้ว",
        //     'quantity.required'=>"โปรดกรอกจำนวนสินค้า",
        //     'quantity.min'=>"โปรดกรอกเป็นจำนวนบวก"            
        // ]
        // );
        $exportproductorder = new ExportProductOrder();
        $exportproductorder -> product_id = $request-> product_id;
        $exportproductorder -> user_id = Auth::id();
        $exportproductorder -> order_id = 1;
        $exportproductorder -> lot_id = 1;
        $exportproductorder -> quantity = 1;
        $exportproductorder -> cost = 1;
        $exportproductorder -> test = FALSE;
        $exportproductorder -> s = FALSE;

        $exportproductorder->save();
        return redirect()->route('ExportOrder.index')->with('success',"บักทึกข้อมูลสำเร็จ");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $exportproductorder=ExportProductOrder::findOrFail($id);
        return redirect()->route('ExportProductOrder.index')->with('exportproductorder');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $item = $request->all();
        $item = $request->except(['_method','_token']);
        $exportproductorder = ExportProductOrder::findOrFail($id)->update($item);
        return redirect()->route('ExportProductOrder.index')->with('success',"แก้ไขข้อมูลสำเร็จ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ExportProductOrder::destroy($id);
        return redirect()->route('ExportProductOrder.index')->with('success',"ลบข้อมูลสำเร็จ");
    }
    
    public function storeOrder(Request $request)
    {
        
        $exportproductorder=ExportProductOrder::all();
        
        $orderdetails = new ExportOrder;
        $orderdetails->id = $request->id_order;
        $orderdetails->user_id=Auth::id();
        
        foreach ($exportproductorder as $product) {
            if(Auth::id()==$product->id_user && $product->check==FALSE){
                $product -> check = TRUE;
                $product -> id_order=$request->id_order;
                $product -> save();
                $product->cost = $product->cost* $product->quantity;
                $orderdetails->Total_price += $product->cost;
            }
        }

        $orderdetails->company_id=Auth::id();
        $orderdetails->date_EXP = $request->date_EXP;;
        $orderdetails->success = FALSE;
        $orderdetails->save();
        
        return redirect("ExportProductOrder");
    }
}