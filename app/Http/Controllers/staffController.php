<?php

namespace App\Http\Controllers;
use App\Http\Requests\productsRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\staff;
use App\Models\orders;
use App\Models\brands;
use App\Models\clients;
use App\Models\products;
use Datatables;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function indexStaff()
    {
        if(request()->ajax()) {
            return datatables()->of(staff::select('*')
            ->where('staff.user_id','=',Auth::id())
            ->get())
            ->addColumn('action', function($row) {
                return '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Edit"
                class="edit btn btn-success edit">
                Edit
            </a>
            <a href="javascript:void(0);" id="delete-book" data-toggle="tooltip" data-original-title="Delete" data-id="'.$row->id.'"
                class="delete btn btn-danger">
                Delete
            </a>
            <a href="/document/'.$row->id.'" id="delete-book" data-toggle="tooltip" data-original-title="Delete" 
                class="document btn btn-primary">
               Document
            </a>';})
            ->editColumn('sfoto',function($row){
                return url($row->sfoto);
            })
            ->addIndexColumn()
            ->make(true);
        }
        return view('staff',['product_data'=>products::orderBy('id','desc')
        ->join('brands','brands.id','=','products.brands_id')
        ->select('products.id','products.mehsul','products.alis','products.satis','products.miqdar','brands.ad as brand')
        ->where('products.user_id','=',Auth::id())
        ->get(),'orders_data'=>orders::join('clients','clients.id','=','orders.client_id')
        ->join('products','products.id','=','orders.product_id')
        ->join('brands','brands.id','=','products.brands_id')
        ->select('orders.user_id','orders.id','orders.miqdar as order_miqdar','orders.created_at','orders.tesdiq','products.mehsul','products.alis','products.satis','products.miqdar',
                'brands.ad as brend',clients::raw("CONCAT(clients.ad, ' ',clients.soyad)as client"))
        ->where('orders.user_id','=',Auth::id())
        ->orderby('id','desc')
        ->get(),
        'total_client'=>clients::where('user_id','=',Auth::id())->count(),
        'total_brand'=>brands::where('user_id','=',Auth::id())->count(),
        'total_product'=>products::where('user_id','=',Auth::id())->count(),
        'total_order'=>orders::where('user_id','=',Auth::id())->count()]);
    }
    
    public function storeStaff(Request $request)
    {   $staff = new Staff();
        $ssay = $staff->where('email','=',$request->email)->count();
        $tsay = $staff->where('telefon','=',$request->telefon)->count();
        $staffId = $request->id;
        if($ssay==0 and $tsay==0 ){
        if(!empty($staffId)){
             
            $staff = staff::find($staffId);
            
            if($request->hasFile('sfoto')){
                $file=time().'.'.$request->sfoto->extension();
                $request->sfoto->storeAs('public/uploads/staff/',$file);     
                $staff->sfoto = 'storage/uploads/staff/'.$file;
            }
            else{
                $staff->sfoto=$staff->sfoto;
            }
         }else{
                
                $staff = new staff;
                $request->validate([
                    'sfoto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ]);

                if($request->file('sfoto')){
                    $file=time().'.'.$request->sfoto->extension();
                    $request->sfoto->storeAs('public/uploads/staff/',$file);     
                    $staff->sfoto = 'storage/uploads/staff/'.$file;
                }
                

         }
         
        $staff->ad = $request->ad;
        $staff->soyad = $request->soyad;
        $staff->email = $request->email;
        $staff->telefon = $request->telefon;
        $staff->vezife = $request->vezife;
        $staff->maas = $request->maas;
        $staff->hired = $request->hired;
        $staff->user_id = Auth::id();
        
        $staff->save();
     
        return Response()->json($staff);
        }
        
        return redirect()->back() ->with('alert', 'Updated!');
    }
   
    public function editStaff(Request $request)
    {   
       
        $where = array('id' => $request->id);
        
        $staff  = staff::where($where)->first();
       
        return Response()->json($staff);
    }
     
     
    public function destroyStaff(Request $request)
    {
        $staff = staff::where('id',$request->id)->delete();
     
        return Response()->json($staff);
    }
}
