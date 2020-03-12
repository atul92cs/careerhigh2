<?php

namespace App\Http\Controllers;
use App\User;
use App\Roadmaplike;
use App\Roadmapcomment;
use App\Roadmap;
use App\Workshop;
use App\Availableworkshop;
use App\WorkshopContact;
use App\Workshoptab;
use App\Order;
use App\Userbookmark;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Notifications\PaymentNotify;
use App\Notifications\OrderNotify;
use PaytmWallet;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['workshops','workshop','availableworkshop','availableworkshops','workshopcontact']);;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
          
        return view('user.home');
    }
    public function profile()
    {
        return view('user.profile');
    }
    public function profileedit()
    {
        return view('user.profileedit');
    }
    
   public function profileeditp(Request $request)
    {
       $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:20480'
        ]);
        
        $mm=Input::only('isug','ugyear','specialug','collegeug','ispg','pgyear','specialpg','collegepg','isworking','company','role','interest');
        if($request->hasFile('image'))
        {
            $photo= $request->image;            
            $filename = $photo->store('public/profile/');
            $mm['image']=  'profile/'.$photo->hashName();
        }
        User::findorfail(auth()->user()->id)->fill($mm)->save();
        
        
       notify()->success("saved successfully","Success","topRight");
        return redirect()->route('profile')->with(['success'=>'saved successfully']);
    }
    public function roadmaplike(Request $request)
    {
         $request->validate([
            'id'=>'required|exists:roadmaps,id,status,1',
        ]);
        $like=Roadmaplike::where('user_id',auth()->user()->id)->where('roadmap_id',$request->id)->where('title','Roadmap')->first();
        
        if(!$like){
            $mm=[
            'roadmap_id'=>$request->id,
            'user_id'=>auth()->user()->id,
            'title'=>'Roadmap',
        ];
        Roadmaplike::create($mm);
        
        
//       notify()->success("saved successfully","Success","topRight");
            return response()->json(['success'=>true,'msg'=>'Liked','count'=>Roadmap::findorfail($request->id)->like->count()]);
//        return redirect()->route('home')->with(['success'=>'Liked']);
        }
        else{
            return response()->json(['success'=>true,'msg'=>'Already Liked']);
//           return redirect()->route('home')->with(['success'=>'Already Liked']); 
        }
        
    }
    public function roadmapbookmark(Request $request)
    {
         $request->validate([
            'id'=>'required|exists:roadmaps,id,status,1',
        ]);
        $like=Userbookmark::where('user_id',auth()->user()->id)->where('roadmap_id',$request->id)->where('title','Roadmap')->first();
        
        if(!$like){
            $mm=[
            'roadmap_id'=>$request->id,
            'user_id'=>auth()->user()->id,
            'title'=>'Roadmap',
        ];
        Userbookmark::create($mm);
        
        
//       notify()->success("saved successfully","Success","topRight");
            return response()->json(['success'=>true,'msg'=>'Bookmarked']);
//        return redirect()->route('home')->with(['success'=>'Liked']);
        }
        else{
            return response()->json(['success'=>true,'msg'=>'Already Bookmarked']);
//           return redirect()->route('home')->with(['success'=>'Already Liked']); 
        }
        
    }
    public function removebookmark(Request $request)
    {
         $request->validate([
            'id'=>'required|exists:userbookmarks,id,user_id,'.auth()->user()->id,
        ]);
        $like=Userbookmark::where('id',$request->id)->first();
        
        $like->delete();

            return response()->json(['success'=>true,'msg'=>'Bookmarked Removed']);

        
    }
    public function roadmapcomment(Request $request)
    {
         $request->validate([
            'id'=>'required|exists:roadmaps,id,status,1',
        ]);

            $mm=[
            'roadmap_id'=>$request->id,
            'user_id'=>auth()->user()->id,
            'title'=>$request->comment,
        ];
        Roadmapcomment::create($mm);
        
            return response()->json(['success'=>true,'msg'=>'Comment Successfully added']);

        
    }
    public function blogcomment(Request $request)
    {
         $request->validate([
            'id'=>'required|exists:blogs,id,status,1',
        ]);

            $mm=[
            'blog_id'=>$request->id,
            'user_id'=>auth()->user()->id,
            'title'=>$request->comment,
        ];
        Roadmapcomment::create($mm);
        
            return response()->json(['success'=>true,'msg'=>'Comment Successfully added']);

        
    }
     public function useractivity()
    {
        return view('user.activity');
    }public function userbookmarks()
    {
        return view('user.bookmarks');
    }
    public function workshops()
    {
        $data['workshops'] = Workshop::all()->where('date2','>=', Carbon::today()->toDateString());
        return view('workshops',$data);
    }
    public function workshop($url)
    {
        if(Workshop::where('url',$url)->first()){
        $data['workshops'] = Workshop::latest();
        $data['workshop'] = Workshop::where('url',$url)->first();
        return view('workshop',$data);
        }else{
             return abort(404);
        }
    }
    
    // workshops available
    
    public function availableworkshops()
    {
        $data['availableworkshops'] = Availableworkshop::all();
        return view('availableworkshops',$data);
    }
    
    public function availableworkshop($url)
    {
        if(Availableworkshop::where('url',$url)->first()){
        $data['availableworkshop'] = Availableworkshop::latest();
        $data['availableworkshop'] = Availableworkshop::where('url',$url)->first();
        return view('availableworkshop',$data);
        }else{
             return abort(404);
        }
    }
    
    public function workshopcontact(Request $request){
            $request->validate([
            'collegename'=>'required',
            'name'=>'required',
            'specialization'=>'required',
            'workshop'=>'required',
            'owning'=>'required',
            'mobile'=>'required',
            'email'=>'required',
            'city'=>'required',
        ]
                           );
        $mm=Input::only('collegename','name','specialization','workshop','owning','mobile','email','city');
        WorkshopContact::create($mm);
        return response()->json(['success'=>true,'msg'=>'We will contact you shortly']);
    }
    
    public function history()
    {
        return view('history');
    }
    public function createorder(Request $request)
    {
        
        $request->validate([
            'email'=>'required',
            'workshop'=>'required|exists:workshops,id',
        ]);
        $workshop = Workshop::findorfail($request->workshop);
        if(auth()->user()->orders->where('workshop_id',$workshop->id)->where('status',1)->first()){
            return response()->json(['success'=>false,'msg'=>'Already subscribed']);
        }
        if(Order::where('workshop_id',$workshop->id)->where('status',1)->count() > $workshop->subs_limit){
            return response()->json(['success'=>false,'msg'=>'This workshop is not available']);
        }
        
        
        $email=$request->email;
        
        
        
        if(explode ("@", $email)[1]!=$workshop->domain){
             return response()->json(['success'=>false,'msg'=>'Please Enter a matching domain name']);
        }
        
        
        
        $data=[
          'user_id'=>auth()->user()->id,  
          'workshop_id'=>$request->workshop,  
          'email_id'=>$request->email,  
          'amount'=>$workshop->price,  
          'status'=>0,  
          'token'=>str_random(6),  
        ];
        
       $ss= Order::where('workshop_id',$request->workshop)->where('user_id',auth()->user()->id)->first();
        if($ss){
            $ss->fill($data)->save();
        }else{
          $ss= Order::create($data); 
        }
       
        
         $uu= User::findorfail(auth()->user()->id);
         $uu->email= $ss->email_id;
         $uu->notify(new PaymentNotify($ss));
        
        
        
       return response()->json(['success'=>true,'msg'=>'Please check mail to make payment']);
    }
    public function paynow($orderid,$token)
    {
        if(Order::where('id',$orderid)->where('token',$token)->where('user_id',auth()->user()->id)->first()){
        $order = Order::where('id',$orderid)->where('token',$token)->where('user_id',auth()->user()->id)->first();
            
            if($order->status==1){
                return abort(419);
//            return response()->json(['success'=>false,'msg'=>'Already subscribed']);
        }
        if(Order::where('workshop_id',$order->workshop_id)->where('status',1)->count() > $order->workshop->subs_limit){
             return abort(419);
//            return response()->json(['success'=>false,'msg'=>'This workshop is not available']);
        }
            
            
        if($order->amount>0){
            $payment = PaytmWallet::with('receive');
        $payment->prepare([
          'order' => $order->id.'_'.rand(100,1000),
          'user' => $order->user_id,
          'mobile_number' => $order->user->phone,
          'email' => $order->user->email,
          'amount' => $order->amount,
          'callback_url' => route('payment')
        ]);
        return $payment->receive();
        
        }
         else{
             $data=[
            'status'=>1,
        ];
        $order->fill($data)->save();
        $uu= User::findorfail($order->user_id);
        $uu->notify(new OrderNotify($order));
       return redirect()->route('thankyou',$order->id)->with(['success'=>true,'msg'=>'Order has successfully placed.','data'=>$order]);  
             
         }   
            
            
            
            
        }else{
             return abort(404);
        }
            
            
        
       
    }
    public function payment(Request $request) {
        
        
        $cc= Order::findorfail(explode('_',$request->ORDERID)[0]);
        $all=$request->all();
        $all['oo_id']=$cc->id;
        $validator = Validator::make($all, [
            'TXNID' => 'required|unique:transactions,TXNID',
            'ORDERID' => 'required|unique:transactions,ORDERID',
            'oo_id' => 'required|unique:transactions,ORDERID|exists:orders,id',
            'CHECKSUMHASH' => 'required|unique:transactions,CHECKSUMHASH',
            'TXNAMOUNT' => 'required|in:'.$cc->amount,
        ]);
        if($validator->fails()) {
            if($cc){
                return redirect()->route('cancel',$cc->id)->withErrors($validator);
            }
            return redirect()->route('orders')->withErrors($validator);
        }
        
        $transaction = PaytmWallet::with('receive');
        $response = $transaction->response();
        if($transaction->isSuccessful()){
            $response['user_id']=auth()->user()->id;
            $response['TTYPE']='workshop';
           $ii= Transaction::create($response);
        }
        else if($transaction->isFailed()){
            if($cc){
                return redirect()->route('cancel',$cc->id)->with(['success'=>false,'msg'=>'Your payment was decline .'])->withErrors($validator);
            }
            return redirect()->route('welcome')->with(['success'=>false,'msg'=>'Your payment was decline .'])->withErrors($validator);
       }
        else if($transaction->isOpen()){
            $response['user_id']=auth()->user()->id;
            $response['TTYPE']='workshop';
            $ii= Transaction::create($response);
        }
        
        $data=[
            'status'=>1,
        ];
        $cc->fill($data)->save();
        $uu= User::findorfail($order->user_id);
        $uu->notify(new OrderNotify($order));
       return redirect()->route('thankyou',$cc->id)->with(['success'=>true,'msg'=>'Order has successfully placed.','data'=>$cc]);  
      }  
    
    
    
        public function thankyou($id){
           $data['order']= Order::findorfail($id); 
            if( $data['order']->user_id != auth()->user()->id  || $data['order']->status != 1){
                return abort(401); 
            }
//            dd($data);
            
            return view('thankyou',$data);
        } 
    public function cancel($id){
            $data['order']= Order::findorfail($id);
            if( $data['order']->user_id != auth()->user()->id || $data['order']->status != 1){
                return abort(401); 
            }
//            dd(session()->all()); 
//            dd($data);
            return view('cancel',$data);
        } 
    
    public function orders(){
        
        return view ('user.orders');
    }
    public function order($id)
    {
        if(Order::findorfail($id)){
        $data['order'] = Order::findorfail($id);
            if( $data['order']->user_id != auth()->user()->id || $data['order']->status != 1){
                return abort(401); 
            }
         return view('user.order',$data); 
        }else{
             return abort(404);
        }
       
    }

}
