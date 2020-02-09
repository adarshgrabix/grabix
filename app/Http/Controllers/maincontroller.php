<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DB;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Validator;
use Session;
 

class maincontroller extends Controller
{
	
	 // Custom  Auth System controller
	 
	 // For register
	public function register(Request $request)
	{
		
		$validator = Validator::make($request->all(), [
            'email' => 'unique:users|required',
            'password' => 'required',
			'name' => 'required',
			'mobile' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        }
		
		
		
		
		 $name=$request->input('name');   
	  $mail=$request->input('email');  
	  $mobile=$request->input('mobile'); 
	  $pass=hash::make($request->input('password'));  
      echo "register successfully"."  ".$mail."  ";
	  $data=array('name'=>$name,'mobile'=>$mobile,'email'=>$mail,'password'=>$pass,);
	  \DB::table('users')->insert($data);
	   $data2=array('Name'=>$name,'Mobile'=>$mobile,'Email'=>$mail,);
	   \DB::table('users_profile')->insert($data2);
	  return redirect('login')
                        ->withErrors("Registered Successfully.Please Login");
       
    }
	
	
	//For Login 
	
	public function check(Request $request)
	{
		 $auth=Auth::attempt(['email'=>$request->input('email'),
		 'password'=>$request->input('password')]);
		 if($auth){
			echo"welcome"; 
			return redirect()->intended('/userprofile');
			 
		 }
		 else
		 {
			 
			return redirect('login')
                        ->withErrors("Invalid Credentials");
		 }
       
    }
	
	//For RESET 
	
	
	public function showlinkForm()
	{
		 
		 return view('resetform');
       
    }
	
	 public function resetprocess(Request $request)
    {
		
       
		$this->validate($request, [
        'email' => 'required|email',
         ]);
         $email=$request->input('email');
		 $token=$request->input('token');
		 $checkUser =  \DB::table('users')->where('email', $email)
         ->first();
		
		 
         
    if (!$checkUser) {
        return redirect('resetform')
                        ->withErrors('User With This Email Not Exist');
						 
    }
	 else
		  $otp=(rand(10000,100000));
		   Session::put('OTP', $otp);
		 
		 $mob= \DB::table('users')->where('email', $email)->first()->Mobile;
	     $name= \DB::table('users')->where('email', $email)->first()->name;
		  Session::put('MOB', $mob);
		// echo"user registered   ";
	    // echo"Your OTP is --  ";
		// echo $otp;
		 
		 
		 
		 
		   $authKey = "163524ADKoNwvp3f05958dc0c";
		   $message="Dear $name your OTP for password reset  is $otp.Do not share with anyone.This is valid upto 30 minutes.- Team Grabix ";
           $mobileNumbers = $mob;
           $senderId = "Grabix";
           $message = urlencode($message);
           $route="4";
           $postData = array('authkey' => $authKey,'mobiles' => $mobileNumbers,'message' => $message,'sender' => $senderId,'route' =>$route);
           $url="http://api.msg91.com/api/sendhttp.php";
            $ch = curl_init();
            curl_setopt_array($ch, array(CURLOPT_URL => $url,CURLOPT_RETURNTRANSFER => true,CURLOPT_POST => true,CURLOPT_POSTFIELDS => $postData));
             $output = curl_exec($ch);
             if(curl_errno($ch)){
              echo 'error:' . curl_error($ch);
                                 }
                curl_close($ch);
               
        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        // $this->reflex($otp,$mob);
		 // $this->otpprocess($otp,$email,$mob);
          return view('Updatepassword');
      
    }
	
	
       public function reflex($otp,$mob)
	{
		 
		$otp1=$otp;
		$mob1=$mob;
		return array ($otp1,$mob1);
		
    }
	 
	  public function otpprocess(Request $request)
	{
		
         $email2=$request->input('email');
		 $mobile2=$request->input('mobile');
		 $otp2=$request->input('otp');
		  $pass=hash::make($request->input('newpassword')); 
		 // list ($otpn,$mobn) = reflex();
		  $OTP = $request->session()->get('OTP');
		   $MOB = $request->session()->get('MOB');
		 if( $otp2==$OTP && $mobile2==$MOB)
		 {
			 
		 \DB::table('users')->where('mobile', $mobile2)->update(['password' => $pass]);
          $alert= "Password is Updated Successfully"; 
		   return view('Updatepassword')
                        ->withErrors($alert);
		   Session::forget('OTP');
		 }
		 else 
			 $alert="Password Update failed.Go back and try with correct mobile number";
		    return view('Updatepassword')
                        ->withErrors($alert);
		/* echo $otp2;
		 \DB::table('users')->where('mobile', $mobile2)->update(['password' => $pass]);
          echo "success";  */
            
		 
	
		
    }
	
	
	
	
	
	//For Logout
	
	public function logout()
	{
		 Auth::logout();
		 return redirect ('login');
       
    }
	
	
public function search(Request $request){
        $query = $request->get('term','');        
        $products=\DB::table('users_profile')->where('name','LIKE','%'.$query.'%')->get();        
        return response()->json($products);
}
	
	
	
	
	
	public function movies()
	{
		
		
	    
		
		 $navdata=\DB::select('select * from navbar_stores_item');
		 
         return view('movies')->with('nav', $navdata);
           
		
       
    }
	
	public function travel()
	{
		
		
	    
		 //echo $detail->Mobile;
		 $navdata=\DB::select('select * from navbar_stores_item');
		 
         return view('travel')->with('nav', $navdata);
           
		
       
    }
	
	public function recharge()
	{
		
		
	    
		 //echo $detail->Mobile;
		 $navdata=\DB::select('select * from navbar_stores_item');
		 
         return view('recharge')->with('nav', $navdata);
           
		
       
    }
	
	public function welcome()
	{
		
		if(Auth::check())
           {
		
	     $detail=\ DB::table('users_profile')->where('Email',Auth::user()->email )->first();
		 //echo $detail->Mobile;
		 
         return view('welcome')->with(['userdata'=>$detail]);
           }
		   else
			   return redirect ('login');
		
       
    }
	
	
	
	public function userprofile()
	{
		
		if(Auth::check())
           {
		
	     $detail=\ DB::table('users_profile')->where('Email',Auth::user()->email )->first();
		 //echo $detail->Mobile;
		 
         return view('user')->with(['userdata'=>$detail]);
           }
		   else
			   return redirect ('login');
		
       
    }
	
	

	public function login()
	{
		
		if(Auth::check())
           {
		
	    
       return redirect('userprofile');
           }
		   else
			   return view ('login');
		
       
    }
	
	
	
	
	
	
   public function index()
   {
       $ads = \DB::select('select * from data where id=1');
	   $slide1 = \DB::select('select * from slider where id=1');
	   $slide2 = \DB::select('select * from slider where id=2');
	   $slide3 = \DB::select('select * from slider where id=3');
	    $promodata = \DB::select('select * from promobox limit 9');
		$topdeals = \DB::select('select * from topdeals');
		$bestoffers = \DB::select('select * from offerbox');
		$coupons = \DB::select('select * from coupons limit 4');
		$usersRw = \DB::select('select * from usersReview');
		$adposter = \DB::select('select * from addposter');
		$offerbox_csv = \DB::select('select * from offerbox_csv limit 12');
		$testdata=\DB::select('select * from test');
		$navdata=\DB::select('select * from navbar_stores_item');
    return view('index')->with('users', '$ads')->with('slider1', $slide1)->with('slider2', $slide2)->with('slider3', $slide3)->with('promobox', $promodata)
	->with('topdeals', $topdeals)->with('bestoffers', $bestoffers)->with('coupon', $coupons)->with('review', $usersRw)->with('ad', $adposter)->with('offer', $offerbox_csv)
	->with('testbox', $testdata)->with('nav', $navdata);
	  
   }
   
     public function comp(Request $request) 
	 {
        $name = $request->input('lower');
		 $name1 = $request->input('upper');
		$data=\DB::select("SELECT * FROM flipkart_mobile_csv WHERE price >='$name' AND price <='$name1' ");
		
		return view('test2')->with('data2',$data);
    }
   
    public function stores()
	{
		$storedata=\DB::select('select * from store_list');
		return view('more-stores')->with('store',$storedata);
	}
   
     public function moredeals()
   {
	$promodata = \DB::select('select * from promobox');
	$testdata=\DB::select('select * from test');
      return view('moredeals')->with('promobox', $promodata)->with('testbox', $testdata);
   }
   
   
     public function hotoffers()
   {
	
	$testdata=\DB::select('select * from test');
      return view('hotoffers')->with('testbox', $testdata);
   }
   
   
   
     public function bestoffers()
   {
	
	$offerbox_csv = \DB::select('select * from offerbox_csv');
      return view('bestoffers')->with('offer', $offerbox_csv);
   }
   
    public function coupon()
   {
	$coupons = \DB::select('select * from coupons ');
	$couponcsv = \DB::select('select * from test ');
	$adposter = \DB::select('select * from addposter');
      return view('coupons')->with('coupon', $couponcsv)->with('ad', $adposter);
   }
   
    public function flipkart()
   {
	
	$flipkart = \DB::select('select * from flipkartstore');
	 $flipkart_csv = \DB::select('select * from flipkart_csv');
      return view('flipkart')->with('flipkartdata', $flipkart)->with('flipkartinfo', $flipkart_csv);
   }
   
    public function amazon()
   {
	
	$amazon = \DB::select('select * from amazon_csv_omgpm');
      return view('amazon')->with('amazondata', $amazon);
   }
   
   
    public function ajio()
   {
	
	
	$ajio_csv_omgpm = \DB::select('select * from ajio_csv_omgpm');
	
      return view('ajio')->with('ajiodata1', $ajio_csv_omgpm);
   }
   
   
     public function tatacliq()
   {
	
	
	$tata_csv_omgpm = \DB::select('select * from tata_csv_omgpm');
	$tata_csv_admitad = \DB::select('select * from offerbox_csv where advcampaign_name  like "TataCliq CPA%"');
	
      return view('tatacliq')->with('tatadata1', $tata_csv_omgpm)->with('tatadata2', $tata_csv_admitad);
   }
   
   
   
   
     public function industrybuy()
   {
	
	
	$industry_csv_omgpm = \DB::select('select * from industry_csv_omgpm');
	$industry_csv_admitad = \DB::select('select * from offerbox_csv where advcampaign_name  like "Industry Buying IN%"');
	
      return view('industrybuying')->with('industrydata1', $industry_csv_omgpm)->with('industrydata2', $industry_csv_admitad);
   }
   
   
     public function myntra()
   {
	
	
    $myntra_csv_omgpm = \DB::select('select * from myntra_csv_omgpm');
	$myntra_csv_admitad = \DB::select('select * from offerbox_csv where advcampaign_name  like "myntra%"');
	
      return view('myntra')->with('myntradata1', $myntra_csv_omgpm)->with('myntradata2', $myntra_csv_admitad);
   }
   
   
   
   
     public function jabong()
   {
	
	
    $jabong_csv_omgpm = \DB::select('select * from jabong_csv_omgpm');
	$jabong_csv_admitad = \DB::select('select * from offerbox_csv where advcampaign_name  like "jabong%"');
	
      return view('jabong')->with('jabongdata1', $myntra_csv_omgpm)->with('jabongdata2', $jabong_csv_admitad);
   }
   
     public function shopclue()
   {
	
	
	$shopclue_csv_omgpm = \DB::select('select * from shopclue_csv_omgpm');
	
      return view('shopclues')->with('shopcluedata1', $shopclue_csv_omgpm);
   }
   
   
   
   
      public function jbl()
   {
	
	
	$jbl_csv_omgpm = \DB::select('select * from jbl_csv_omgpm');
	
      return view('jbl')->with('jbldata1', $jbl_csv_omgpm);
   }
   
   
       public function printvenue()
   {
	
	
    $printvenue_csv_omgpm = \DB::select('select * from printvenue_csv_omgpm');
	$printvenue_csv_admitad = \DB::select('select * from offerbox_csv where advcampaign_name  like "printvenue%"');
	
      return view('printvenue')->with('printvenuedata1', $printvenue_csv_omgpm)->with('printvenuedata2', $printvenue_csv_admitad);
   }
   
   
   
    
     public function ticketnew()
   {
	
	
	$ticketnew_csv_omgpm = \DB::select('select * from ticketnew_csv_omgpm');
	
      return view('ticketnew')->with('ticketnewdata1', $ticketnew_csv_omgpm);
   }
   
   
      public function bms()
   {
	
	
	$bookmyshow_csv_cx = \DB::select('select * from bookmyshow_csv_cx where Merchant  like "Bookmyshow%"');
	
      return view('bookmyshow')->with('bmsdata1', $bookmyshow_csv_cx);
   }
   
   
   
       public function coolwink()
   {
	
	
	$coolwink_csv_cx = \DB::select('select * from bookmyshow_csv_cx where Merchant  like "Coolwinks%"');
	
      return view('coolwinks')->with('cooldata1', $coolwink_csv_cx);
   }
   
   
   
    public function zoomcar()
   {
	
	$amazon = \DB::select('select * from amazon_csv_omgpm');
      return view('amazon')->with('amazondata', $amazon);
   }
   
   
    public function bigrock()
   {
	
	$bigrock = \DB::select('select * from bigrockstore');
      return view('bigrock')->with('bigrockdata', $bigrock);
   }
   
    public function ebay()
   {
	
	$ebay = \DB::select('select * from ebaystore');
      return view('ebay')->with('ebaydata', $ebay);
   }
    public function paytm()   
   {
	
	$paytm = \DB::select('select * from paytmstore');
      return view('paytm')->with('paytmdata', $paytm);
   }
   
       public function mobikwik()   
   {
	
	$mobikwik = \DB::select('select * from test where Merchant like "Paytm Recharge & Shop%"');
      return view('mobikwik')->with('mobikwikdata1', $mobikwik);
   }
   
   
       public function kfc()   
   {
	
	$kfc = \DB::select('select * from admitad_csv where advcampaign_name like "KFC%"');
      return view('kfc')->with('kfcdata', $kfc);
   }
   
}
