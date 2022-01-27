<?php

namespace App\Http\Controllers;
use Illuminate\Support\facades\Hash; 
use Illuminate\Http\Request;
use App\Mail\email;
use App\Models\admin;
use App\Models\menu;
use App\Models\cart;
use App\Models\order;

use Illuminate\Support\facades\DB; 
use Illuminate\Support\Facades\Mail; 

use Session;
class mycontroller extends Controller
{
    //


    public function default(){
        return view('admin.main');
    }
    public function register(){
        return view('admin.register');
    }
    public function login(){
        return view('admin.login');
    }
    
    public function dashboard(){
        return view("admin.dashboard");
    }

    public function product(Request $req){
        $menu=menu::all();
        return view("admin.product",['menu'=>$menu]);
    }
    public function cartlist(){
        $data=session('sid');
        $user_id=$data[0]->id;
        $menu= DB::table('carts')
        ->join('menus','menus.menu_id','carts.menus_id')
        ->select('menus.*','carts.id as carts_id')->where('carts.user_id',$user_id)->get();
       return view('admin.displaycart',['menus'=>$menu]);
    }
    static function cartItem(){
        $data=session('sid');
        $user_id=$data[0]->id;
        return cart::where('user_id',$user_id)->count();
    }

   public function removecart($id){
        cart::destroy($id);
        return redirect('/adminpanel/cartlist');
   }
   public function ordernow(){
    $data=session('sid');
    $user_id=$data[0]->id;
    $admin=admin::where('id',$user_id)->first();
    $total=$menu= DB::table('carts')
    ->join('menus','menus.menu_id','carts.menus_id')
    ->where('carts.user_id',$user_id)->sum('menus.price');
   return view('admin.ordernow',['total'=>$total],compact('admin'));
   }

   public function orderplace(Request $req){
    $data=session('sid');
    $user_id=$data[0]->id;
     $allcart=cart::where('user_id',$user_id)->get();   
    foreach($allcart as $cart){
        $order=new order;
        $order->menu_id=$cart['menus_id'];
        $order->user_id=$cart['user_id'];
        $order->status="success";
        $order->payment_method=$req->payment;
        $order->payment_status="sucess";
        $order->address=$req->address;
        $order->save();
        cart::where('user_id',$user_id)->delete();
        return redirect('/adminpanel/sendEmail');
    }
    
   }
   public function myorder(){
      $data=session('sid');
    $user_id=$data[0]->id;
    $admin=admin::where('id',$user_id)->first();
    $order= DB::table('orders')
    ->join('menus','menus.menu_id','orders.menu_id')
    ->where('orders.user_id',$user_id)->get();
    return view('admin.myorder',['order'=>$order],compact('admin'));
   
 }

 public function sendEmail(){
    $data=session('sid');
    $user_id=$data[0]->id;
    $user_email=$data[0]->email;
    $user_name=$data[0]->name;
     $details=[
         'title'=>'your order id '.$user_id,
         'body'=>'Dear '.$user_name.' your order has been successfully' ,
     ];
    
    Mail::to($user_email)->send(new email($details));
    return redirect('/adminpanel/myorder');
}

    public function add_to_cart(Request $req){
         $data=session('sid');
         if ($data)
        {
            
           $cart=new cart;
           $cart->user_id=$data[0]->id;
           $cart->menus_id=$req->cat_id;
           $cart->save();
           return redirect('/adminpanel/dashboard');
        
            
        }
        else{
            return "hello";
        }

    } 
    public function postregister(Request $req){

        $validateData=$req->validate([
            'email'=>'required|min:4|max:255',
            'password'=>'required|min:4|max:255',
            'name'=>'required|min:4|max:255',
            'age'=>'required|integer|between:1,100',
            'city'=>'required| min:4|max:10'
            
            
        ],[
            'email.required'=>'plz enter valid name  ',
             'password.required'=>'plz enter valid password ',
            'name.required'=>'plz enter valid name  ',
            'age.required'=>'plz enter valid age',
            'city.required'=>'plz enter valid city',

            
            ]
    );

    if($validateData){
        $email=$req->email;
        $password=$req->password;
        $name=$req->name;
        $age=$req->age;
        $city=$req->city;
          $admin=new admin();
          $admin->email=$email;
          $admin->password=Hash::make($req->password);
          
          $admin->name=$name;
          $admin->city=$city;
          $admin->age=$age;
        
          $admin->save();
        return redirect('/adminpanel/login');
     }
        else {
            
            return back()->with('errMsg','Uploading Error');
        }

    
      
    }       

    public function postlogin(Request $req){
        $validateData=$req->validate([
            'email'=>'required|min:4|max:255',
            'password'=>'required|min:4|max:255'
           
            
        ],[
            'email.required'=>'plz enter valid name  ',
             'password.required'=>'plz enter valid password ',
            

            
            ]
    );

    if($validateData){
        $email=$req->email;
        $password=$req->password;
        $data=admin::where(['email'=>$email])->get();
        if(count($data)>0){
            if(Hash::check($password,$data[0]->password)){
                $req->session()->put('sid',$data);
             return redirect('/adminpanel/dashboard');
            }else{
            return back()->with('errMsg',"Email or Password is not correct");

            }
             
        }
        else {
            return back()->with('errMsg',"Email or Password is not correct");
        }

    }

 }
 public function edit($id){
    
    
    $data=session('sid');
        $user_id=$data[0]->id;
        $admin=admin::where('id',$user_id)->first();
        // print_r($admin->email);
    return view('admin.edit',compact('admin'));
}
public function profile($id){
    
    
    $data=session('sid');
        $user_id=$data[0]->id;
        $admin=admin::where('id',$user_id)->first();
        // print_r($admin->email);
    return view('admin.profile',compact('admin'));
}
public function updateadmin(Request $req){
    $proid= $req->pro_email;
    $admin=admin::where('email',$proid)->update([
        'name'=>$req->name,'age'=>$req->age,'city'=>$req->city

    ]);
    return redirect('/adminpanel/dashboard');
}
 public function ordersubmit(Request $req){
    $data=session('sid');
     if($data){

        return view('admin.ordersubmit');
     }
    
 }
 

 public function logout(){
    session()->forget('sid');
    return redirect("/adminpanel");
}  

    
}
