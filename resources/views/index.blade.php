<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Grabix | Best Offers,Promo Codes,Coupons,Deals & Gift Vouchers Website </title>
  
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Best Offers,Promo Codes,Coupons,Deals & Gift Vouchers Website.Visit Grabix and grab best offers,deals on online shopping">
    <meta name="keywords" content="best coupon sites, best coupon websites, top coupon websites,Indian best coupon,deals websites, promos, vouchers, coupons, discounts, offers, deals, promo codes,discount coupon,coupons,promo codes,online shopping,vouchers, discounts, offers, deals">
    <link rel="icon" href="static/images/logo.png">
   

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/mycss.css" rel="stylesheet">
	  <link href="/scss.css" rel="stylesheet">

   
    <script src="/js/ie-emulation-modes-warning.js"></script>
     


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
	<script>
		$(document).ready(function() {
		  $('.nav-toggle').click(function(){
			//get collapse content selector
			var collapse_content_selector = $(this).attr('href');

			//make the collapse content to be shown or hide
			var toggle_switch = $(this);
			$(collapse_content_selector).toggle(function(){
			  if($(this).css('display')=='none'){
                                //change the button label to be 'Show'
				toggle_switch.html('Show details');
			  }else{
                                //change the button label to be 'Hide'
				toggle_switch.html('Hide details');
			  }
			});
		  });

		});
		</script>
		
		
		
		<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
      });
}

/*An array containing all the country names in the world:*/
var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>

	
	<!-- MailMunch for Grabix  -->
<!-- Paste this code right before the </head> tag on every page of your site. -->
<script src="//a.mailmunch.co/app/v1/site.js" id="mailmunch-script" data-mailmunch-site-id="393728" async="async"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet"> 
	
	
	
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

<body class="body-home">
  <div class="row">
    <div class="hidden-xs col-sm-12">
	  <div class="top-header1 no-margin">
        <div class="row">
		<center>
          <div class="col-md-3"> <img height="120px" width="160px" src="/images/logo.png"></img> </div>
          <div class="col-md-6">
		  <br><br>
		  
		  
	   <form autocomplete="off" action="/action_page.php">
             <div class="autocomplete" style="width:350px;">
             <input id="myInput" type="text" name="myCountry" placeholder="Country">
             </div>
             <input type="submit">
      </form>
	  
      </div>
          <div class="col-md-3"><br><br><font face="Georgia" size="4" color="white"><b>#Support@grabix.in</b></font></div>
        </center>
		</div>
      </div>
    </div>    
   </div>
 
 <nav class="navbar navbar-custom no-border" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle navbar-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"> 
				<span   style="color:white; letter-spacing: 1px;  font-size:20px; font-family:verdana;">Grabix</span></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right ">
                    <li>
                        <a href="\"><b>Home</b></a>
                    </li>
                    <li>
                        <a href="\business"><b>Business</b></a>
                    </li>
                   
                     <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><b>Popular Stores </b><b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
					     @foreach( $nav as $i)
                        <li><a href="\{{$i->link}}">{{$i->name}}</a></li>
                       @endforeach
                    </ul>
                </li>
                   
				  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Hot Offers </b> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                             @if (Auth::guest()) <a href="https://dl.flipkart.com/dl/?affid=youngerse">Flipkart</a> @else
							 <a href="https://dl.flipkart.com/dl/?affid=youngerse&affExtParam1={{Auth::user()->email}}">Flipkart</a> @endif
								   
                            </li>
                            <li>
                                <a href="https://linksredirect.com/?pub_id=14907CL13429&source=linkkit&url=http%3A%2F%2Fwww.ebay.in%2Frpp%2Fsale-events">Ebay Sale Events</a>
                            </li>
                            <li>
                               <a href="https://dl.flipkart.com/dl/?affid=youngerse @if(Auth::check())&affExtParam1={{Auth::user()->email}}@endif">Flipkart</a>
                            </li>
                             <li>
                                <a href="https://linksredirect.com/?pub_id=14907CL13429&source=linkkit&url=http%3A%2F%2Fwww.jabong.com%2Fonline-sale%2F">Jabong Sale</a>
                            </li>
                              
							</ul>
				   </li>
				   
				   
				   
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Quick Links </b> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="\aboutus">About Us</a>
                            </li>
                            <li>
                                <a href="\contactus">Contact Us</a>
                            </li>
                            <li>
                                <a href="\team">Our Team</a>
                            </li>
                            <li>
                                <a href="\work">Work With Us</a>
                            </li>
                            
                        </ul>
                    </li>
					
					
					 <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>@if (Auth::guest()) My account  @else  {{Auth::user()->name}}  @endif</b>  <img height="30px" width="30px" src="/images/logo/user.png"></img></a>
                        <ul class="dropdown-menu">
                            @if (Auth::guest())
								
							   
							     
                             <center><font face="arial" size="1" color="black"><strong>Shop via Grabix to earn cashback and rewards.</strong></font>
							 <a href="/register"> <div  class="rbtn2"> 
	                  <font face="Sans-serif" size="2" color="white"><center><b>Sign Up</b></center></font>
					         </div></a><br>
                           <font face="arial" size="2" color="black">Existing User ?</font> <a href="/login"><font face="arial" size="2" color="#333"><strong>Login</strong></font></a>
                          </center>
                            @else
							<center><font face="arial" size="2" color="black"><strong>Hii,{{Auth::user()->name}}</strong></font> <br><font face="arial" size="1" color="black"><strong>{{Auth::user()->email}}</strong></font></center>
                            <hr>
							<li>
                              <center>  <a href="\userprofile"><font face="arial" size="2" color="#CB202D"><strong>My Panel</strong></font></a></center>
                            </li>
							<hr>
                            <li>
                               <center> <a href="\logout"><font face="arial" size="2" color="#CB202D"><strong>Logout</strong></font></a></center>
                            </li><br>
                             @endif
                        </ul>
                    </li>
                </ul>
				
				
				
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	
	
	
	
	
	
	
	
	
	
	
	 <form autocomplete="off" action="/action_page.php">
             <div class="autocomplete" style="width:350px;">
             <input id="myInput" type="text" name="myCountry" placeholder="Country">
             </div>
             <input type="submit">
      </form>
	
	

	
<div class="container"> <!--container start-->
<br><center>

         <font face="Helvetica" size="4" color="red"><b># Fastest Growing Coupon</b></font>
         <font face="Helvetica" size="4" color="grey"><b>& Deals platform</b></font>

         <div class="myborder"></div>
    </center>
 
 
 
<center>
     <div class="row">
               <div class="col-md-1"></div>
                    <div class="col-md-10">
  
                                     <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                      <!-- Indicators -->
                                     <ol class="carousel-indicators">
                                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                     <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                     <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                     </ol>

                                    <!-- Wrapper for slides -->
 <div class="carousel-inner" role="listbox">
    <div class="item active">
	  @foreach( $slider1 as $y)
	<a href="{{$y->link}}">
    <img class="responsive-img img-thumbnail" src="{{$y->image}}"></img>   
    </a>                                                                    <!--slide 1-->
     <div class="carousel-caption"> </div>
	 
 @endforeach 

   </div> 
                                           
   
      <div class="item">    @foreach ($slider2 as $z)
	<a href="{{$z->link}}">
    <img class="responsive-img img-thumbnail" src="{{$z->image}}"></img>   
    </a>                                                                    <!--slide 2-->
     <div class="carousel-caption"> </div>
	 
 @endforeach

     </div>
	
	  <div class="item">    @foreach ($slider3 as $p)
	<a href="{{$p->link}}">
    <img class="responsive-img img-thumbnail" src="{{$p->image}}"></img>   
    </a>                                                                    <!--slide 3-->
     <div class="carousel-caption"> </div>
	 
 @endforeach

     </div>
   
     </div

     <!-- Controls -->
  
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
     </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
       </div>
	   
  </div>
  </div>
 
 <div class="col-md-1"></div>
</div>
</center>


 
 
   <br>
  
    <!--THREE ADD WIDGET-->
  <div class="row"><center>
  <div class="col-md-4">
   <script type="text/javascript">amzn_assoc_ad_type ="responsive_search_widget"; amzn_assoc_tracking_id ="7714-21"; amzn_assoc_marketplace ="amazon"; amzn_assoc_region ="IN"; amzn_assoc_placement =""; amzn_assoc_search_type = "search_widget";amzn_assoc_width ="300"; amzn_assoc_height ="250"; amzn_assoc_default_search_category =""; amzn_assoc_default_search_key ="";amzn_assoc_theme ="light"; amzn_assoc_bg_color ="FFFFFF"; </script><script src="//z-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1&Marketplace=IN"></script>
  </div>
  <div class="col-md-4"> <div data-WRID="WRID-148396903704612853" data-widgetType="searchWidget" data-class="affiliateAdsByFlipkart" height="250" width="300" ></div><script async src="//affiliate.flipkart.com/affiliate/widgets/FKAffiliateWidgets.js"></script></div>
  
  <div class="col-md-4"> <iframe width='300' height='250' frameborder='0' scrolling='no' src='https://www.cuelinks.com/widgets/10255?pub_id=14907CL13429'></iframe></div>
 </center>
</div>
 
 
 
 <div class="container">
 <div class="jumbotron" style="padding-bottom:5px;padding-top:5px;">
  
    <div class="row"><center>
	 
	 <div class="col-md-3 col-xs-6"><img style="margin-bottom:5px;margin-top:5px;" height="60px" width="60px" src="/images/icons/movies.png"></img><br><font face="calibri" size="3" ><strong>Movies </strong></font></div>
	 <div class="col-md-3 col-xs-6"><img style="margin-bottom:5px;margin-top:5px;" height="60px" width="60px" src="/images/icons/mobile.png"></img><br><font face="calibri" size="3" ><strong>Recharge </strong></font></div>
	 <div class="col-md-3 col-xs-6"><img style="margin-bottom:5px;margin-top:5px;" height="60px" width="60px" src="/images/icons/travel.png"></img><br><font face="calibri" size="3" ><strong>Travels </strong></font></div>
	 <div class="col-md-3 col-xs-6"><img style="margin-bottom:5px;margin-top:5px;" height="60px" width="60px" src="/images/icons/cash.png"></img> <br><font face="calibri" size="3" ><strong>Cashback</strong></font></div>
	 </center>
	</div>
  
</div>
</div>
 <hr>
 <center><h1><small>Popular Online Stores</small><h1></center>
 
 
 
 
  <div class="row">

     <!--PROMO BOX 1-->
	 
 
 
 
 
 
 
 


<center>

      <div class="row">
     <div class="col-xs-6 col-sm-3"> <div class="thumbnail"><a href="\">                              <!--STORE 1-->
      <img height="90px" width="100px" class="img-responsive "  src="/images/logo/flipkart.png"></img>
      <div class="caption">
       <strong> Amazon Offers </strong>
       
       
      </div>
	  </a>
    </div>
	</div>
	
	
	   <div class="col-xs-6 col-sm-3"> <div class="thumbnail"><a href="\">                              <!--STORE 1-->
      <img height="90px" width="100px" class="img-responsive "  src="/images/logo/flipkart.png"></img>
      <div class="caption">
       <strong> Amazon Offers </strong>
       
       
      </div>
	  </a>
    </div>
	</div>
	
	
	
	   <div class="col-xs-6 col-sm-3"> <div class="thumbnail"><a href="\">                              <!--STORE 1-->
      <img height="90px" width="100px" class="img-responsive "  src="/images/logo/flipkart.png"></img>
      <div class="caption">
       <strong> Amazon Offers </strong>
       
       
      </div>
	  </a>
    </div>
	</div>
	
	
	  <div class="col-xs-6 col-sm-3"> <div class="thumbnail"><a href="\">                              <!--STORE 1-->
      <img height="90px" width="100px" class="img-responsive "  src="/images/logo/flipkart.png"></img>
      <div class="caption">
       <strong> Amazon Offers </strong>
       
       
      </div>
	  </a>
    </div>
	</div>
	
	
	  <div class="col-xs-6 col-sm-3"> <div class="thumbnail"><a href="\">                              <!--STORE 1-->
      <img height="90px" width="100px" class="img-responsive "  src="/images/logo/flipkart.png"></img>
      <div class="caption">
       <strong> Amazon Offers </strong>
       
       
      </div>
	  </a>
    </div>
	</div>
	</div>
 
  <div class="row">
  <div class="col-xs-6 col-sm-2"><a href="\flipkart"><img class="img-responsive img-store"  src="/images/flipkarti.png"></img></a></div>
  <div class="col-xs-6 col-sm-2"><a href="\amazon"><img class="img-responsive img-store"  src="/images/amazoni.png"></img></a></div>
  <div class="col-xs-6 col-sm-2"><a href="\paytm"><img class="img-responsive img-store"  src="/images/paytmi.png"></img></a></div>
  <div class="col-xs-6 col-sm-2"><a href="\mobikwik"><img class="img-responsive img-store"  src="/images/mobik.png"></img></a></div>
  <div class="col-xs-6 col-sm-2"><a href="\jabong"><img class="img-responsive img-store"  src="/images/jabongi.png"></img></a></div>
  <div class="col-xs-6 col-sm-2"><a href="\myntra"><img class="img-responsive img-store"  src="/images/myntrai.png"></img></a></div>
  <div class="col-xs-6 col-sm-2"><a href="\ajio"><img class="img-responsive img-store"  src="/images/ajioi.png"></img></a></div>
  <div class="col-xs-6 col-sm-2"><a href="\ebay"><img class="img-responsive img-store"  src="/images/ebayi.png"></img></a></div>
  <div class="col-xs-6 col-sm-2"><a href="https://ad.admitad.com/g/q813rolziie07d5950afbd2a826972/"><img class="img-responsive img-store"  src="/images/jio7.png"></img></a></div>
  
  <div class="col-xs-6 col-sm-2"><a href="\tatacliq"><img class="img-responsive img-store"  src="/images/tata.png"></img></a></div>
  <div class="col-xs-6 col-sm-2"><a href="\industrybuy"><img class="img-responsive img-store"  src="/images/industry.png"></img></a></div>
  <div class="col-xs-6 col-sm-2"><a href="\bigrock"><img class="img-responsive img-store"  src="/images/bigrock.png"></img></a></div>
  </div>
 
 
  


</center>

 <div class="container">

<h3 style="color:black; letter-spacing: 2px; font-weight: 600; font-size:18px; font-family:arial;"><b>Hot Deals</b></h3>
<div class="myborder"></div>   
 <div class="row">




 <center>
 
  @foreach ($promobox as $a)
   <div class="col-md-4">
   
  <div class="panel panel-default no-border">     <!--PROMO RECTANGLE BOX -->
 
 

 <div class="row">
  <div class="col-xs-5"><img class="img-responsive promoimg" src="{{$a->PRODUCT_IMAGE}}"  ></img></div>
   <a href="{{$a->PRODUCT_LINK}}">
  <div class="col-xs-7">
  <p class="promotext1">
     {{$a->STATEMENT}}</p>
	
	<font face="verdana" size="3" color="#C00"><b>{{$a->DISCRIPTION}}</b></font>
	<br>
	
	
	 <div class="panel-footer bg"><img  align="bottom" height="40px" width="80px" src="{{$a->LOGO}}"></img></div>
	
	</div>
 	
	</a>
	
	
</div>
  
   


	
</div>


</div>
 @endforeach 
</center>
</div>

  
 


 

 

                                 
 
 


<center><a href="\moredeals"><button type="button" class="btn btn-primary btn-xs">More Hot Deals</button></a>

</center>


<h3 style="color:black; letter-spacing: 2px; font-weight: 600; font-size:18px; font-family:arial;"><b>Hot Offers & Coupons</b></h3>
<div class="myborder"></div>


 <div class="row">

     <!--PROMO BOX 1-->
	 
 @foreach ($testbox as $x)
  <div class="col-sm-6 col-md-3">
                                 <!-- product link-->
<div class="panel panel-success no-border">
  <div class="panel-body"><div id="box">
 <center>{{$x->Merchant}}<hr> 
    <img class="boximg" src="{{$x->Image_URL}}"></img>
	 
	<p class="boxcontent">{{$x->Categories}}</p>
	<font face="Calibri" size="3" color="#2e7d32"><b>{{$x->Title}}</b></font>
	
	</center>

	<br>
<div>
				<div href="#cl{{$x->Id}}" class="nav-toggle"><font face="Calibri" size="2" color="#cd3232"><b>Show Coupon</b></font></div>
			</div>
			<div id="cl{{$x->Id}}" style="display:none">
	    <center> <strong><font face="Calibri" size="3" color="#cd3232"><b>COUPON CODE: </b></font><div style="border-style: dotted;padding-top:10px;padding-bottom:10px;color:#cd3232;"> <font face="Calibri" size="3" color="black"><b>{{$x->Coupon_Code}}</b></font> </div>   </strong>Just Copy and Paste	</center>
			<font face="Calibri" size="3" color="black"><b>Offer Description:</b></font>
			<ul>
			<li><b>{{$x->Terms}}</b></li>
			<li><b> Expiry: {{$x->End_Date}}</b></li>
			</ul>
				
			</div>
	
	
	  
	    <center> <a href="{{$x->URL}}">
      <div  class="topdealsbtn"> 
	   <font face="Sans-serif" size="3" color="white"><center><b>Grab Deal</b></center></font>
	 </div></a></center> 
	
	
  </div>
 </div>
</div> 
</div>






    
@endforeach 
  
  
  </div>
 
 
 
 
 

 
 
 
 
 
 
 <!-- OFFER  box-->
 <a href="/bestoffers">
<h3 style="color:black; letter-spacing: 2px; font-weight: 600; font-size:18px; font-family:arial;"><b>Best Offers</b></h3>
</a>
<div class="myborder"></div>


<div class="row">


                                                       <!--OFFER BOX 1-->
   @foreach($offer as $b)
  <div class="col-sm-6 col-md-3">
      
<div class="panel panel-success">

  <div class="panel-body">
  <center>
    <img class="boximg2" src="{{$b->logo}}"></img>
	<hr> </center>
	<center>
	<strong>
	{{$b->name}} <br>
	</strong>
	</center>
	 <center>  
	 <a href="{{$b->promolink}}">
	 <center> <div class="topdealsbtn3"> 
	   <font face="Sans-serif" size="2" color="white"><center><b>Activate Deal</b></center></font>
	 </div> </center> 
	 </a>
	 </center>
    </div>

 
</div>
  </div>
  
  
  
 @endforeach 
                                                                         
</div>
<center>
<a class="mylink" href="/bestoffers">
<h3 style="color:#cd3232; letter-spacing: 2px; font-weight: 600; font-size:18px; font-family:arial;"><u><b>MORE BEST OFFERS</b></u></h3>
</a>
</center>
 
 <!--COUPON BOXES-->
 
 <h3>Best Coupons</h3>
<div class="myborder"></div>
 
<div class="row">
@foreach($coupon as $c)
  <div class="col-md-3">                                                             <!--COUOPON BOX -->
 
  
<div class="panel panel-success">

  <div class="panel-body">
  <center>
    <img class="boximg2" src="{{$c->LOGO}}"></img>
	<hr> </center>
	<center>
	<strong>
	{{$c->LINE1}}<br>{{$c->LINE2}}<br>{{$c->LINE3}}
	</strong>
	</center>
	 <center>  
	  
  <!-- Button trigger modal -->
<div class="mybutton2" data-toggle="modal" data-target="#myModal1">
  <font face="Sans-serif" size="2" color="white"><center><b>Get Coupon</b></center></font>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> {{$c->NAME}} Coupon</h4>
         <img class="boximg2" src="{{$c->LOGO}}"></img>
         
         
         
      </div>
      <div class="modal-body">
           <strong>COUPON CODE: <div style="border-style: dotted;padding:auto;">  {{$c->CODE}} </div>   </strong> <br>  Just Copy and paste<br>
                      {{$c->LINE1}}   {{$c->LINE2}}     {{$c->LINE3}}   <br> <strong>Terms and Conditions:</strong><br>  {{$c->TERMS}}                                                                   <!--COUPON CONTEnt1-->
      </div>
      <div class="modal-footer">
	 <center> 
     	 <a href="{{$c->DEAL }}">
	   
	 <div class="mybutton"> 
	 <font face="Sans-serif" size="2" color="white"> <center><b>Activate Deal</b> </center></font>
	 </div> 
	 </a>   </center>
        
      </div>
    </div>
  </div>
</div>
 
	 </center>
    </div>

 
</div>
  
  
  
  
  
  
  </div>
  
  @endforeach
</div>
  
  
  
 
  
  
  
  
  
  
  
  
  
  <center> <a href="/coupons"><strong> View More Coupons>> </strong></a>  </center>
  
  
 
</div>
 
 <div class="container">
 
  <h3>Users Reviews</h3>
<div class="myborder"></div>

























  
  <div class="row"> 
  <center>
  @foreach($review as $d)
 
  <div class="col-md-3"><img  height="80px" width="200px"  src="{{$d->PHOTO}}" class="img-responsive img-circle" alt="Responsive image"><br>
 <h4> <strong> {{$d->NAME}} </strong></h4>
  <p style="font-family:Georgia;font-size:15px"> 
   {{$d->COMMENT}} 
  </p>
  
  
  </div>
  @endforeach
  
  
  </center>
</div>
 
 
  <h3>Sponsored Ads</h3>
<div class="myborder"></div>
 
 
  <div class="row">
 <center>
 
  <div class="col-md-3"><a href="http://tracking.clickonik.com/aff_c?offer_id=298&aff_id=1972&file_id=5536" target="_blank"><img src="https://media.go2speed.org/brand/files/clickonik/298/20170712122526-250x250.jpg" width="250" height="250" border="0" /></a><img src="http://tracking.clickonik.com/aff_i?offer_id=298&file_id=5536&aff_id=1972" width="1" height="1" /></div>

 <div class="col-md-3"><a href="http://tracking.clickonik.com/aff_c?offer_id=298&aff_id=1972&file_id=5536" target="_blank"><img src="https://media.go2speed.org/brand/files/clickonik/298/20170712122526-250x250.jpg" width="250" height="250" border="0" /></a><img src="http://tracking.clickonik.com/aff_i?offer_id=298&file_id=5536&aff_id=1972" width="1" height="1" /></div>
 
    <div class="col-md-3"><a href="http://tracking.clickonik.com/aff_c?offer_id=298&aff_id=1972&file_id=5536" target="_blank"><img src="https://media.go2speed.org/brand/files/clickonik/298/20170712122526-250x250.jpg" width="250" height="250" border="0" /></a><img src="http://tracking.clickonik.com/aff_i?offer_id=298&file_id=5536&aff_id=1972" width="1" height="1" /></div>

	 <div class="col-md-3"><a href="http://tracking.clickonik.com/aff_c?offer_id=298&aff_id=1972&file_id=5536" target="_blank"><img src="https://media.go2speed.org/brand/files/clickonik/298/20170712122526-250x250.jpg" width="250" height="250" border="0" /></a><img src="http://tracking.clickonik.com/aff_i?offer_id=298&file_id=5536&aff_id=1972" width="1" height="1" /></div>
 
  </center>
</div>



 
 
 
 
 
 
 
 
 
 
 
 
 
 <br>
 
 <center>
 
 <div class="panel panel-default no-border">
	 <div class="panel-body">
 <div class="row"><center>
  
  <div class="col-md-12"><h3 style="color:#cd3232; letter-spacing: 2px; font-weight: 600; font-size:22px; font-family:arial;"><b>Fastest Growing Coupons & Deals Platform</b></h3>
  <br>
   <p style="font-family:Georgia;font-size:16px;text-align:justify"> 
   Grabix, India's fast growing Coupon & deal platform,to benefit shoppers with the best deals,coupon offers, deals and discounts online.
   We have partnerships with india's leading 100+ online stores like flipkart,
   amazon,jabong,myntra,bigrock,snapdeal,paytm and 
   much more to provide our 
   best offers and deals online.Besides these, we are constantly working to
    include more and more online stores on our website so that you can get more offers and best deals.
   
   
   
  <div class='mailmunch-forms-widget-513551'></div>
   
   
   
   
   
   
   </p>


 
 </div>
 </center>
</div>
	</div>
</div>
 
 </center>
 </div>
 
 
 
 
 
 
 
 
 
 
 
  </div>
 </div><!--container END-->
	













  
  
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <!--FOOTER START-->
 <footer class="myfooter">
 <div class="container">
 <center>
 <div class="row">
  <div class="col-md-4"><font face="verdana" size="4" color="grey"> <b><span class="glyphicon glyphicon-search" aria-hidden="true"></span> <u>About Grabix</u></b></font>
  <br> <br>
  <font face="verdana" size="2" color="grey"><center>
Grabix, India's fast growing Coupon & deal platform, helps you save money through posting  of coupons, offers and discounted deals on its portal. </center> </font> 
<br> </div>
  <div class="col-md-4"><font face="verdana" size="4" color="grey"><b> <span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span> <u>Quick Links</u></b></font>
  <br>
  <br>    
  

  <p>  
   <a href="\business"><font face="Verdana" size="2" color="grey"><b> Advertise with us</b></font>  </a> 
	<br>
	<a href="\business"><font face="Verdana" size="2" color="grey"><b>Join Us</b></font> </a>
	<br>
    <a href=""><font face="Verdana" size="2" color="grey"><b>  Campus Ambassador </b></font>	</a> 
  <br>
  <a href="http://www.grabixworld.wordpress.com" > <font face="Verdana" size="2" color="grey"><b> Blog</b></font></a>
  </p>
  
  
  
  
  
  
  
  
  
  
  </div>
  <div class="col-md-4"><font face="verdana" size="4" color="grey"><b> <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> <u>Connect</u></b></font>
  <br>
  <br>
   <p>  
   <a href="\aboutus"><font face="Verdana" size="2" color="grey"><b> About Us</b></font>  </a> 
	<br>
	<a href="\team"><font face="Verdana" size="2" color="grey"><b>Meet the Team</b></font> </a>
	<br>
    <a href="\contactus"><font face="Verdana" size="2" color="grey"><b> Contact Us</b></font>	</a> 
  <br>
  <a href="\work" > <font face="Verdana" size="2" color="grey"><b>Work with Us</b></font></a>
  </p>
  
  
  
  
  
  
  </div>
</div>
</center>
 <div class="bottom-footer">
 
 © Copyright: Grabix Web Services 2017
 <br>
 <a href="http://ourdisclaimer.com/?i=Grabix.in"><b>Disclaimer </b></a><a href="privacy.php"><b>| Privacy Policy</b></a>
 
 
 </div>
 </div>
 </footer>
 

 
 <!--FOOTER END-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/docs.min.js"></script>
	 <script src="/myjava.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
	
	
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89386995-1', 'auto');
  ga('send', 'pageview');

</script>
	
	
	
	<script>
  (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
  })(window, document, '_gscq','script','//widgets.getsitecontrol.com/90910/script.js');
</script>
	
	
	
	
	
	
	
	
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/592bfeb94374a471e7c50471/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	
	
	
	
	
	
	

  </body>
</html>
