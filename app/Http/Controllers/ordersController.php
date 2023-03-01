<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ordersRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\orders;
use App\Models\brands;
use App\Models\clients;
use App\Models\products;
use Datatables;


class ordersController extends Controller
{
    public function indexOrders()
    {
        if(request()->ajax()) {
            return datatables()->of(orders::orderby('id','desc')
      
            ->join('clients','clients.id','=','orders.client_id')
            ->join('products','products.id','=','orders.product_id')
            ->join('brands','brands.id','=','products.brands_id')
            ->select('orders.tesdiq','orders.id','orders.miqdar as omiq','orders.created_at','orders.user_id','products.mehsul','products.alis','products.satis','products.user_id','products.miqdar',
                    'brands.ad as brand',clients::raw("CONCAT(clients.ad, ' ',clients.soyad)as client"))
            ->where('orders.user_id','=',Auth::id())
            ->get())
            ->addColumn('action', function($row){
                if($row->tesdiq==0)
                {return '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Edit"
                class="edit btn btn-success edit">
                Edit
            </a>
            <a href="javascript:void(0);" id="delete-book" data-toggle="tooltip" data-original-title="Delete" data-id="'.$row->id.'"
                class="delete btn btn-danger">
                Delete
            </a>
            <a href="javascript:void(0);" id="delete-book" data-toggle="tooltip" data-original-title="Delete" data-id="'.$row->id.'"
                class="confirm btn btn-primary">
                Confirm
            </a>';}
            else{
                return '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Edit"
                class="cancel btn btn-danger ">
                Cancel
            </a>';
            }
            })
            ->addIndexColumn()
            ->make(true);
        }
        return view('orders'
        ,['client_data'=>clients::orderbydesc('ad')
        ->where('clients.user_id','=',Auth::id())
        ->get()
        ,'product_data'=>products::orderBy('id','desc')
        ->join('brands','brands.id','=','products.brands_id')
        ->select('products.id','products.mehsul','products.alis','products.satis','products.miqdar','brands.ad as brand')
        ->where('products.user_id','=',Auth::id())
        ->get()
        ,'brand_data'=>brands::orderbydesc('id')
        ->where('brands.user_id','=',Auth::id())
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
    
    public function storeOrders(Request $request)
    {  
        $orderId = $request->id;
        if($orderId){ 
            $order = orders::find($orderId);
         }else{
               $order = new orders;   
         }
        $order->client_id = $request->client;
        $order->product_id = $request->mehsul;
        $order->miqdar = $request->omiq;
        $order->tesdiq = '0';
        $order->user_id = Auth::id();
        $order->save();
     
        return Response()->json($order);
    }
     
    public function editOrders(Request $request)
    {   
        $where = array('id' => $request->id);
        $order  = orders::where($where)->first();
     
        return Response()->json($order);
    }

    public function destroyOrders(Request $request)
    {
        $order = orders::where('id',$request->id)->delete();
     
        return Response()->json($order);
    }
    public function confirm(Request $request){
        $orders = Orders::find($request->id);
        $products = Products::find($orders->product_id);
        $pmiqdar = $products->miqdar;
        $smiqdar = $orders->miqdar;

        if($smiqdar<=$pmiqdar)
        {
            $miqdar = $pmiqdar - $smiqdar;
            $products->miqdar = $miqdar;
            $products->save();

            $orders->tesdiq =1;
            $orders->save();
            return Response()->json($orders);
        }
        else{
            $orders ="Anbarda kifayət qədər məhsul yoxdur";
        }
        return Response()->json($orders);
    }
    public function cancel(Request $request){
        
        $orders = Orders::find($request->id);
        $products = Products::find($orders->product_id);
        $pmiqdar = $products->miqdar;
        $smiqdar = $orders->miqdar;
       
            $miqdar = $pmiqdar + $smiqdar;
            $products->miqdar = $miqdar;
            $products->save();

            $orders->tesdiq = 0;
            $orders->save();
            return Response()->json($orders);
        
    
        }
        
}
