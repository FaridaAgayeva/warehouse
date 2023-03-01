<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\xercRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\xerc;
use App\Models\orders;
use App\Models\brands;
use App\Models\clients;
use App\Models\products;
use Datatables;

class xercController extends Controller
{
    public function indexXerc()
    {
        if(request()->ajax()) {
            return datatables()->of(xerc::select('*')
            ->where('xercs.user_id','=',Auth::id())
            ->get())
            ->addColumn('action', 'button-action')
            ->addIndexColumn()
            ->make(true);
        }
        return view('xerc',['product_data'=>products::orderBy('id','desc')
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
    
    public function storeXerc(Request $request)
    {  $xercId = $request->id;
        if(!empty($xercId)){
            $xerc = xerc::find($xercId);
         }else{  
                $xerc = new xerc;
         }
         
        $xerc->teyinat = $request->teyinat;
        $xerc->mebleg = $request->mebleg;
        $xerc->user_id = Auth::id();
        
        $xerc->save();
     
        return Response()->json($xerc);
    }
   
    public function editXerc(Request $request)
    {   
       
        $where = array('id' => $request->id);
        
        $xerc  = xerc::where($where)->first();
       
        return Response()->json($xerc);
    }
     
     
    public function destroyXerc(Request $request)
    {
        $xerc = xerc::where('id',$request->id)->delete();
     
        return Response()->json($xerc);
    }
}
