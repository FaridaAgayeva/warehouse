<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\productsRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\products;
use App\Models\brands;
use App\Models\orders;
use App\Models\clients;
use Datatables;

class productsController extends Controller
{
    public function indexProducts()
    {
        if(request()->ajax()) {
            return datatables()->of(products::orderby('id','desc')
            ->join('brands','brands.id','=','products.brands_id')
            ->select('products.id','products.user_id','products.mehsul','products.sekil','products.alis','products.satis',
            'products.miqdar','products.created_at','brands.ad as brand')
            ->where('products.user_id','=',Auth::id())
            ->get())
            ->addColumn('action', 'button-action')
            ->editColumn('sekil',function($row){
                return url($row->sekil);
            })
            ->addIndexColumn()
            ->make(true);
        }
            return view('products',[
                'brand_data'=>brands::orderbydesc('id')
                ->where('brands.user_id','=',Auth::id())
                ->get(),
                'product_data'=>products::orderBy('id','desc')
                ->join('brands','brands.id','=','products.brands_id')
                ->select('products.id','products.mehsul','products.alis','products.satis','products.miqdar','brands.ad as brand')
                ->where('products.user_id','=',Auth::id())
                ->get(),
                'orders_data'=>orders::join('clients','clients.id','=','orders.client_id')
                ->join('products','products.id','=','orders.product_id')
                ->join('brands','brands.id','=','products.brands_id')
                ->select('orders.id','orders.miqdar as order_miqdar','orders.created_at','orders.tesdiq','products.mehsul','products.alis','products.satis','products.miqdar',
                        'brands.ad as brend',clients::raw("CONCAT(clients.ad, ' ',clients.soyad) as client"))
                ->where('orders.user_id','=',Auth::id())
                ->orderby('id','desc')
                ->get(),
                'total_client'=>clients::where('user_id','=',Auth::id())->count(),
                'total_brand'=>brands::where('user_id','=',Auth::id())->count(),
                'total_product'=>products::where('user_id','=',Auth::id())->count(),
                'total_order'=>orders::where('user_id','=',Auth::id())->count()
                    ]);
    }
    
    public function storeProducts(Request $request)
    {   $productsId = $request->id;
        #$brandsId = $request->id;
        if(!empty($productsId)){
             
            $product = products::find($productsId);
            #$brands = brands::find($brandsId);
            if($request->hasFile('sekil')){
                $file=time().'.'.$request->sekil->extension();
                $request->sekil->storeAs('public/uploads/products/',$file);     
                $product->sekil = 'storage/uploads/products/'.$file;
            }
            else{
                $product->sekil=$product->sekil;
            }
        
         }else{
                
                $product = new products;    
                $request->validate([
                    'sekil' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ]);

                if($request->file('sekil')){
                    $file=time().'.'.$request->sekil->extension();
                    $request->sekil->storeAs('public/uploads/products/',$file);     
                    $product->sekil = 'storage/uploads/products/'.$file;
                }  

         }
        #$brands->brand= $request->brand;
        $product->brands_id = $request->brands_id;
        $product->mehsul = $request->mehsul;
        $product->alis = $request->alis;
        $product->satis = $request->satis;
        $product->miqdar = $request->miqdar;
        $product->user_id = Auth::id();
        
        $product->save();
     
        return Response()->json($product);
    }
   
    public function editProducts(Request $request)
    {   
       
        $where = array('id' => $request->id);
        
        $product  = products::where($where)->first();
       
        return Response()->json($product);
    }
     
     
    public function destroyProducts(Request $request)
    {
        $product = products::where('id',$request->id)->delete();
     
        return Response()->json($product);
    }
}
