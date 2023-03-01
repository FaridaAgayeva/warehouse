<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\clientsRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\orders;
use App\Models\brands;
use App\Models\clients;
use App\Models\products;
use Datatables;

class clientsController extends Controller
{
    public function indexClients()
    {
        if(request()->ajax()) {
            return datatables()->of(clients::select('*')
            ->where('clients.user_id','=',Auth::id())
            ->get())
            ->addColumn('action', 'button-action')
            ->editColumn('foto',function($row){
                return url($row->foto);
            })
            ->addIndexColumn()
            ->make(true);
        }
        return view('clients',['product_data'=>products::orderBy('id','desc')
        ->join('brands','brands.id','=','products.brands_id')
        ->select('products.id','products.mehsul','products.alis','products.satis','products.miqdar','brands.ad as brand')
        ->where('products.user_id','=',Auth::id())
        ->get(),
        'orders_data'=>orders::join('clients','clients.id','=','orders.client_id')
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
        'total_order'=>orders::where('user_id','=',Auth::id())->count()
    ]);
    }
    
    public function storeClients(Request $request)
    {  $clientsId = $request->id;
        if(!empty($clientsId)){
             
            $client = clients::find($clientsId);
            
            if($request->hasFile('foto')){
                $file=time().'.'.$request->foto->extension();
                $request->foto->storeAs('public/uploads/clients/',$file);     
                $client->foto = 'storage/uploads/clients/'.$file;
            }
            else{
                $client->foto=$client->foto;
            }
         }else{
                
                $client = new clients;
                $request->validate([
                    'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ]);

                if($request->file('foto')){
                    $file=time().'.'.$request->foto->extension();
                    $request->foto->storeAs('public/uploads/clients/',$file);     
                    $client->foto = 'storage/uploads/clients/'.$file;
                }
                

         }
         
        $client->ad = $request->ad;
        $client->soyad = $request->soyad;
        $client->telefon = $request->telefon;
        $client->sirket = $request->sirket;
        $client->user_id = Auth::id();
        
        $client->save();
     
        return Response()->json($client);
    }
   
    public function editClients(Request $request)
    {   
       
        $where = array('id' => $request->id);
        
        $client  = clients::where($where)->first();
       
        return Response()->json($client);
    }
     
     
    public function destroyClients(Request $request)
    {
        $client = clients::where('id',$request->id)->delete();
     
        return Response()->json($client);
    }
}
