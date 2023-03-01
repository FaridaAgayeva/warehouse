<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\documentRequest;
use App\Models\document;
use App\Models\staff;
use App\Models\orders;
use App\Models\brands;
use App\Models\clients;
use App\Models\products;
use Illuminate\Support\Facades\Auth;


class documentController extends Controller
{
    public function document($id){
        $dataDoc = document::orderByDesc('id')
        ->join('staff','staff.id','=','documents.staff_id')
        ->where('staff.id','=',$id)
        ->select('staff.ad','staff.soyad','documents.user_id','documents.staff_id','documents.id','documents.basliq','documents.qeyd','documents.skan','documents.qeyd')
        ->where('documents.user_id','=',Auth::id())->get();
        
        return view('document',['dataDoc'=>$dataDoc,
        'staff_id'=>Staff::find($id),
        'product_data'=>products::orderBy('id','desc')
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
        'total_order'=>orders::where('user_id','=',Auth::id())->count()]);
       
    }
    public function gonder(Request $postDoc){
        $document = new document();      
         if($postDoc->file('skan')){
            $file=time().'.'.$postDoc->skan->extension();
            $postDoc->skan->storeAs('public/uploads/docs/',$file);     
            $document->skan = 'storage/uploads/docs/'.$file;
         }  
        $document->staff_id = $postDoc->staff_id;
        $document->basliq = $postDoc->basliq;
        $document->qeyd = $postDoc->qeyd;
        $document->user_id = Auth::id();
        $document->save();
        return back()->with('success','Melumat ugurla elave edildi'); 
    }
    public function sil($id){
         return view('document',[
            'dataDoc'=>document::
            join('staff','staff.id','=','documents.staff_id')
        ->where('staff.id','=',$id)->orderBY('id','desc')->get(),
            'silDoc'=>document::find($id)
        ]);
    }
    public function delete($id){
        document::find($id)->delete();
        return redirect()->route('document')->with('success','Sened silindi');
    }
    
}
