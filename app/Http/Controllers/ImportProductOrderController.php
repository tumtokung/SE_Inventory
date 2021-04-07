<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImportProductOrder;
use App\Models\Importproductsuccess;
use App\Models\Order;
use App\Models\OrderImportproductsuccess;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class ImportProductOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $importproductorder=ImportProductOrder::all();
        $date = Carbon::now();
        
        return view('ImportProduct.AddOrder.index',compact('importproductorder','date'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ImportProduct.AddOrder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //check validate
        $request->validate([
            'id_product'=>'required|max:6|Exists:products|unique:import_product_orders',
            'quantity'=>'required',
            'cost'=>'required',
            'date_EXP'=>'required'
        ],
        [
            'id_product.required'=>"โปรดกรอกรหัส",
            'id_product.max'=>"รหัสมี 6 ตัว",
            'id_product.exists'=>"ไม่มีสินค้า",
            'id_product.unique'=>"มีสินค้าอยู่ในรายการอยู่แล้ว",
            'quantity.required'=>"โปรดกรอกจำนวนสินค้า",
            'cost.required'=>"โปรดกรอกต้นทุน",
            'date_EXP.required'=>"โปรดกรอกวันหมดอายุ",
            
        ]
        );
        $importproductorder = new ImportProductOrder;
        $importproductorder->id_product=$request->id_product;
        $importproductorder->quantity=$request->quantity;
        $importproductorder->cost=$request->cost;
        $importproductorder->date_EXP=$request->date_EXP;
        $importproductorder->id_user=Auth::id();
        $importproductorder->save();
        
        return redirect()->route('ImportProductOrder.index')->with('success',"บักทึกข้อมูลสำเร็จ");
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
        $importproductorder=ImportProductOrder::findOrFail($id);
        return view('ImportProduct.AddOrder.edit',compact('importproductorder'));
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
        $importproductorder = ImportProductOrder::findOrFail($id)->update($item);
        return redirect()->route('ImportProductOrder.index')->with('success',"แก้ไขข้อมูลสำเร็จ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ImportProductOrder::destroy($id);
        return redirect()->route('ImportProductOrder.index')->with('success',"ลบข้อมูลสำเร็จ");
    }
    
    public function storeOrder(Request $request)
    {
        
        $importproductorder=ImportProductOrder::all();
        
        $orderdetails = new Order;
        $orderdetails->user_id=Auth::id();
        foreach ($importproductorder as $product) {
            if(Auth::id()==$product->id_user){
                $product->cost = $product->cost* $product->quantity;
                $orderdetails->Total_price += $product->cost;
            }
        }

        $orderdetails->company_id=Auth::id();
        $orderdetails->date_EXP = $request->date_EXP;;
        $orderdetails->save();

        
        foreach ($importproductorder as $product) {
            if(Auth::id()==$product->id_user){
                $importproducts = new Importproductsuccess;
                $importproducts->id_product=$product->id_product;
                $importproducts->quantity=$product->quantity;
                $importproducts->cost=$product->cost;
                $importproducts->date_EXP=$product->date_EXP;
                $importproducts->id_user=Auth::id();
                $importproducts->save();
            }
        }

        // $order_importproductsuccesses = new OrderImportproductsuccess;
        // $importproductsuccesses=Importproductsuccess::all();
        // foreach ($importproductsuccesses as $importproductsuccess) {
        //     if(Auth::id()==$product->id_user){
                
        //         $order_importproductsuccesses->	id_order = $orderdetails->id;
        //         $order_importproductsuccesses->	id_importproductsuccesses =  $importproductsuccess->id;
        //         $order_importproductsuccesses->save();
        //     }
        // }
        $orders = Order::first();
        $importproductsuccess=Importproductsuccess::first();
        $importproductsuccesses=Importproductsuccess::all();
        foreach ($importproductsuccesses as $importproductsuccess) {
            if(Auth::id()==$importproductsuccess->id_user){
                $orders->importproductsuccesses()->sync($importproductsuccess->id);
            }
        }

        
        // dd($orderdetails->id);
        
        return redirect("ImportProductOrder");
    }
    
}
