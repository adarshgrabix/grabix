<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('main');
});
*/


Route::get('/', 'maincontroller@index');



Route::get('/moredeals', 'maincontroller@moredeals');




Route::get('/hotoffers', 'maincontroller@hotoffers');

Route::get('/bestoffers', 'maincontroller@bestoffers');

Route::get('/coupons', 'maincontroller@coupon');

Route::get('/flipkart', 'maincontroller@flipkart');

Route::get('/tatacliq', 'maincontroller@tatacliq');


Route::get('/industrybuying', 'maincontroller@industrybuy');

Route::get('/amazon', 'maincontroller@amazon');

Route::get('/ajio', 'maincontroller@ajio');

Route::get('/myntra', 'maincontroller@myntra');


Route::get('/jabong', 'maincontroller@jabong');

Route::get('/shopclues', 'maincontroller@shopclue');

Route::get('/jbl', 'maincontroller@jbl');

Route::get('/printvenue', 'maincontroller@printvenue');

Route::get('/ticketnew', 'maincontroller@ticketnew');

Route::get('/bookmyshow', 'maincontroller@bms');

Route::get('/coolwinks', 'maincontroller@coolwink');

Route::get('/bigrock', 'maincontroller@bigrock');  

Route::get('/ebay', 'maincontroller@ebay');

Route::get('/paytm', 'maincontroller@paytm');

Route::get('/mobikwik', 'maincontroller@mobikwik');

Route::get('/kfc', 'maincontroller@kfc');

Route::get('/movies', 'maincontroller@movies');
Route::get('/travel', 'maincontroller@travel');
Route::get('/recharge', 'maincontroller@recharge');



Route::get('/more-stores', 'maincontroller@stores');


//Auth Routes
Route::get('/login', 'maincontroller@login');
Route::post('/reg', 'maincontroller@register');
Route::post('/check', 'maincontroller@check');
Route::get('/welcome', 'maincontroller@welcome');
Route::get('/logout', 'maincontroller@logout');
Route::get('/resetform', 'maincontroller@showlinkForm');
Route::post('/resetprocess', 'maincontroller@resetprocess');
Route::post('/otpprocess', 'maincontroller@otpprocess');
Route::get('/Updatepassword', function() {
 return view('Updatepassword');	
	
});


Route::get('/userprofile', 'maincontroller@userprofile');

	
Route::get('/register', function() {
 return view('register');	
	
});

/*Route::get('/login', function() {
 return view('login');	
	
});*/


 
Route::post('/search','maincontroller@search');


Route::get('/finder', function() {
 return view('finder');	
	
});

Route::get('/search2', function() {
 return view('search');	
	
});

Route::get('/business', function() {
 return view('business');	
	
});

Route::get('/aboutus', function() {
 return view('aboutus');	
	
});

Route::get('/terms', function() {
 return view('terms');	
	
});



Route::get('/test', function() {
	
	return view('test');
});


Route::get('/claim', function() {
	
	return view('claim');
});

Route::get('/test2', function() {
	
	return view('test2');
});
Route::post('/comp','maincontroller@comp');

Route::get('/student-ambassador', function() {
 return view('ambassador');	
	
});

Route::get('/privacy', function() {
 return view('privacy');	
	
});

Route::get('/team', function() {
 return view('ourteam');	
	
});

Route::get('/contact', function() {
 return view('contactus');	
	
});

Route::get('/work', function() {
 return view('work');	
	
});







