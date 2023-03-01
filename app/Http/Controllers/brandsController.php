<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\brandsRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\orders;
use App\Models\brands;
use App\Models\clients;
use App\Models\products;
use Datatables;


class brandsController extends Controller
{   
   
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(brands::select('*')
            ->where('brands.user_id','=',Auth::id())
            ->get())
            ->addColumn('action', 'button-action')
            ->editColumn('foto',function($row){
                return url($row->foto);
            })
            ->addIndexColumn()
            ->make(true);
        }
        return view('brands',['product_data'=>products::orderBy('id','desc')
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
    
    public function store(Request $request)
    {  $brandId = $request->id;
        if(!empty($brandId)){
             
            $brand = brands::find($brandId);
            
            if($request->hasFile('foto')){
                $file=time().'.'.$request->foto->extension();
                $request->foto->storeAs('public/uploads/brands/',$file);     
                $brand->foto = 'storage/uploads/brands/'.$file;
            }
            else{
                $brand->foto=$brand->foto;
            }
         }else{
                
                $brand = new brands;

                $request->validate([
                    'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ]);

                if($request->file('foto')){
                    $file=time().'.'.$request->foto->extension();
                    $request->foto->storeAs('public/uploads/brands/',$file);     
                    $brand->foto = 'storage/uploads/brands/'.$file;
                }
                

         }
         
        $brand->ad = $request->ad;
        $brand->user_id = Auth::id();
        
        $brand->save();
     
        return Response()->json($brand);
    }
   
    public function edit(Request $request)
    {   
       
        $where = array('id' => $request->id);
        
        $brand  = brands::where($where)->first();
       
        return Response()->json($brand);
    }
     
     
    public function destroy(Request $request)
    {
        $brand = brands::where('id',$request->id)->delete();
     
        return Response()->json($brand);
    }
}
