<!DOCTYPE html>
<html lang="en">
  <head>
  
       <title>User Profile</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Know more about Grabix.Visit to know about Grabix.in">
    <meta name="keywords" content="Grabix | About us,About Grabix">
     <link rel="icon" href="/images/logo.png">

   

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/mycss.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/js/ie-emulation-modes-warning.js"></script>

		
	
	
		<style>
        body{ 
         background-image:url(images/bgwap.jpg);
        background-color:#f7f7f7;
         }
		 
		 
		 
		 .tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
       </style>
	

	
	
	
	
	
	
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

	
	
	
	
	
	
    <body>

   
		
	<!--<div class="top-header1 no-margin">

	<div class="row"><center>
  <div class="col-md-4">
   <img height="120px" width="160px" src="/images/logo.png"></img>

  </div>
  <div class="col-md-4"> </div>
  <div class="col-md-4"><br><br><font face="Georgia" size="4" color="white"><b>#Support@grabix.in</b></font></div>
  </center>
</div>
	
	
	
</div>-->
<nav class="navbar navbar-custom no-border  nodown-margin" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><p style="font-family:cursive;font-size:18px">Grabix</p></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="\"><b>Home</b></a>
                    </li>
                    <li>
                        <a href="\business"><b>Business</b></a>
                    </li>
                 
                   
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Quick Links </b> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="\aboutus">About Us</a>
                            </li>
                            <li>
                                <a href="\contact">Contact Us</a>
                            </li>
                            <li>
                                <a href="\team">Our Team</a>
                            </li>
                            <li>
                                <a href="\work">Work With Us</a>
                            </li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	

   

    
  
	
	 <div class="container" role="main">
	 <br>
	 <br><center>
     <!-- <span   style="color:#33373D; letter-spacing: 2px; font-weight: 600; font-size:24px; font-family:arial;"><b>Know More About Us</b></span></center>
	   
   
-->  <p style="font-family:calibri;font-size:19px;font-color:blue"><strong>Account Overview</strong></p>
<div class="panel panel-default no-border">
  <div class="panel-body">
   <div class="row">
        <center>
        <div class="col-md-2">
		<img height="148px" width="109px" class="img-responsive" src="/images/user1.png"></img>
		<a href="/logout"><font face="arial" size="2" color="#C00"><strong>Logout </strong></font></a>
		</div>
		 <div class="col-md-2"><br>
	  <p style="font-family:calibri;font-size:15px;font-color:blue"><strong>Hii,{{Auth::user()->name}}</strong></p>
	    <p style="font-family:calibri;font-size:15px;font-color:black"><strong>{{Auth::user()->email}}</strong></p>
		  <p style="font-family:calibri;font-size:15px;font-color:#33373D"><strong>+91{{Auth::user()->Mobile}}</strong></p>
		
		
		
		</div>
        <div class="col-md-1"></div>
		<div class="col-md-2"><br><font face="arial" size="2.8" color="#C00"><strong>Pending Cashback</strong></font><br><br>
		<font face="arial" size="4" color="#C00"><strong>Rs {{$userdata->Pending}}</strong></font></div>
		<div class="col-md-2"><br><font face="arial" size="2" color="green"><strong>Confirmed Cashback</strong></font><br><br>
		<font face="arial" size="4" color="#C00"><strong>Rs. {{$userdata->Confirmed }}</strong></font></div>
		<div class="col-md-3">
      <div  class="rbtn"  onclick="openCity(event, 'redeem')"> 
	   <font face="Sans-serif" size="3" color="white"><center><b>Redeem</b></center></font>
	   
	 </div><br><font face="arial" size="2" color="#C00"><strong>(Minimum redeemable amount is Rs.100.00) </strong></font></div>
		</center>
  </div>
    
	
	
	
   </div>
   </div>
   
    <div class="panel panel-default">
  <div class="panel-body">
  <center> <div class="tab"><center>
  <button class="tablinks" onclick="openCity(event, 'recent')" id="defaultOpen">Recent Activity</button>
  <button class="tablinks" onclick="openCity(event, 'redeem')">Redeem</button>
 
   <button class="tablinks" onclick="openCity(event, 'payout')">Payout</button>
    <button class="tablinks" onclick="openCity(event, 'claim')">Claim</button>
   <button class="tablinks" onclick="openCity(event, 'request')">Request Cashback</button>
    <button class="tablinks" onclick="openCity(event, 'help')">Help</button>
   </center>
</div>

<div id="recent" class="tabcontent">
  <h3>Your recent activity</h3>
   <p style="font-family:calibri;font-size:15px;font-color:blue"><strong>{{$userdata->Activity}}  </strong></p>
</div>

<div id="redeem" class="tabcontent">
  <h3>Redeem your Cashback</h3><font face="arial" size="2" color="#C00"><strong>(Minimum redeemable amount is Rs.100.00) </strong></font><br>
  <form class="form-horizontal" method="POST" action="http://formspree.io/youngersera@gmail.com">
  <div class="form-group">
    <label  class="col-sm-2 control-label">Name</label>
    <div class="col-sm-4">
      <input name="name" type="text" class="form-control" id="inputEmail3" placeholder="Your Name">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Email</label>
    <div class="col-sm-4">
      <input name="email" type="email" class="form-control" id="inputPassword3" placeholder="Email">
    </div>
  </div>
  
 <div class="form-group">
    <label  class="col-sm-2 control-label">Redeem Amount</label>
    <div class="col-sm-4">
      <input name="contact" type="text" class="form-control" id="inputPassword3" placeholder="Redeem Amount">
    </div>
  </div>
  
  
  <div class="form-group">
    <label  class="col-sm-2 control-label">Cashback Mode</label>
    <div class="col-sm-2">
   <select name="payout_method">
  <option value="Paytm">Paytm</option>
  <option value="PhonePe">PhonePe</option>
  <option value="freecharge">Freecharge</option>
  <option value="Amazongiftvoucher">Amazon_Gift_Voucher</option>
  <option value="Flipkart_gift_voucher">Flipkart_Gift_Voucher</option>
</select>
    </div>
	    <div class="col-sm-1"></div>
	</div>	
	<div class="form-group">
    <label  class="col-sm-2 control-label">ID or Mobile</label>
    <div class="col-sm-4">
      <input name="Wallet_ID" type="text" class="form-control" id="inputPassword3" placeholder="No. associated with your wallet">
    </div>
  </div>

  <div class="form-group">
    <button class="specialbtn" type="submit"> 
	   <font face="Sans-serif" size="3" color="white"><center><b>SUBMIT</b></center></font>
	  </button>
     
  </div>
</form> 
</div>

<div id="help" class="tabcontent">
  <h4>How to get Cashback?</h4>
   <div class="row">
        <center>
        <div class="col-md-4"> <font face="Sans-serif" size="2" color="#C00"><center><b>BROWSE</b></center></font><p style="font-family:calibri;font-size:15px;font-color:red"><strong>Find best deals,discounts and offers on your favourite online stores and services.
		</strong></p>
		
		</div>
		<div class="col-md-4"> <font face="Sans-serif" size="2" color="#C00"><center><b>SHOP</b></center></font><p style="font-family:calibri;font-size:15px;font-color:red"><strong>Click on link  to visit  stores and shop normally. </strong></p>
		
		</div>
		<div class="col-md-4"> <font face="Sans-serif" size="2" color="#C00"><center><b>EARN</b></center></font><p style="font-family:calibri;font-size:15px;font-color:red"><strong>Be cool and relax while we track your purchase and credit to you. </strong></p>
		
		</div>
		</center>
    </div>
   <p style="font-family:calibri;font-size:15px;font-color:red"><strong>Important Points</strong></p>
   <p style="font-family:calibri;font-size:15px;font-color:blue">1-Your cart should be empty before you start and  off all third party browser extensions.</p>
   <p style="font-family:calibri;font-size:15px;font-color:blue">2-Continue shopping without closing the offer window and
finish your purchase in the same session. </p>
    <p style="font-family:calibri;font-size:15px;font-color:blue"><strong>Amount added to your pending balance is indicative and may change upon 
  final confirmation from the store. </strong> </p>
 
  
  
</div>
<div id="payout" class="tabcontent">
  <h3>Your Cashback Payout</h3>
  <p>{{$userdata->RecentPayout}} </p>
</div>

<div id="claim" class="tabcontent">
  <h4>Raise Your Cashback Claim</h4>
  <p>Claim your missing cashback here. </p>
  
  <form class="form-horizontal" method="POST" action="http://formspree.io/youngersera@gmail.com">
  <div class="form-group">
    <label  class="col-sm-2 control-label">Name</label>
    <div class="col-sm-8">
      <input name="name" type="text" class="form-control" id="inputEmail3" placeholder="Your Name">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Email</label>
    <div class="col-sm-8">
      <input name="email" type="email" class="form-control" id="inputPassword3" placeholder="Email">
    </div>
  </div>
  
  <div class="form-group">
    <label  class="col-sm-2 control-label">Store  Name</label>
    <div class="col-sm-8">
      <input name="store" type="text" class="form-control" id="inputPassword3" placeholder="Store  Name">
    </div>
  </div>
  
   <div class="form-group">
    <label  class="col-sm-2 control-label">Product Purchased </label>
    <div class="col-sm-8">
      <input name="Product" type="text" class="form-control" id="inputPassword3" placeholder="Product Purchased">
    </div>
  </div>
   
   <div class="form-group">
    <label  class="col-sm-2 control-label">Date of Purchase </label>
    <div class="col-sm-8">
      <input name="date" type="text" class="form-control" id="inputPassword3" placeholder="Date of Purchase">
    </div>
  </div>
  
  
 

  <div class="form-group">
    <button class="specialbtn" type="submit"> 
	   <font face="Sans-serif" size="3" color="white"><center><b>Claim</b></center></font>
	  </button>
     
  </div>
</form>
  
  
  
</div>

<div id="request" class="tabcontent">
  <h4>Request Cashback</h4>
  <p>Not find any cashback offer on your favourite product.Just fill this form and our team find and provide you max.possible cashback. </p>
  
  <form class="form-horizontal" method="POST" action="http://formspree.io/youngersera@gmail.com">
  <div class="form-group">
    <label  class="col-sm-2 control-label">Name</label>
    <div class="col-sm-8">
      <input name="name" type="text" class="form-control" id="inputEmail3" placeholder="Your Name">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Email</label>
    <div class="col-sm-8">
      <input name="email" type="email" class="form-control" id="inputPassword3" placeholder="Email">
    </div>
  </div>
  
  <div class="form-group">
    <label  class="col-sm-2 control-label">Mobile</label>
    <div class="col-sm-8">
      <input name="Mobile" type="integer" class="form-control" id="inputPassword3" placeholder="Mobile">
    </div>
  </div>
  
   <div class="form-group">
    <label  class="col-sm-2 control-label">Product Link </label>
    <div class="col-sm-8">
      <input name="Product" type="text" class="form-control" id="inputPassword3" placeholder="Product Link/URL">
    </div>
  </div>
   
  
  
 

  <div class="form-group">
    <button class="specialbtn" type="submit"> 
	   <font face="Sans-serif" size="3" color="white"><center><b>Request</b></center></font>
	  </button>
     
  </div>
</form>
  
  
  
</div>

<script>
document.getElementById("defaultOpen").click();
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
  </center>
  <br>
     <font face="Sans-serif" size="3" color="#C00"><center><b>Important Points</b></center></font>
	 <p style="font-family:calibri;font-size:15px;font-color:blue;text-align:justify"> To earn cashback, please ensure that you get redirected to the store only via the Grabix link and make your purchase.
       Once your purchase is completed, we usually track it within 48 hours and your cashback is added to your pending balance. 
Stores wait for the return and exchange period to be over before giving us the final confirmation of the sale. This process can usually take 4-8 weeks depending on the store. 
Once we receive final confirmation of the sale from the merchant your pending cashback is made available for you to use.




	 </p>
	  <p style="font-family:calibri;font-size:15px;font-color:blue;text-align:justify"><strong>1-Amount added to your pending balance is indicative and may change upon final confirmation from the store.  
	  
	<br> 2-All Cashback & Reward statistics are not updated in real-time. It may take 24-48hr in showing updated balance.  
	 <br>  3-Minimum redeemable amount is Rs.100.00
	<br>4-Cashback Request feature not guarantee cashback on every product.It depends on store you choose and product.
<br> 5-After requesting cashback it will take 24 hours to proceesed and final result will be sent on your email.
<br> 6-Cashback earned as signup bonus is valid only for 45 days. </strong> </p>
   </div>
   </div>
  
   
   </div><!--container end-->
   
   
   
   
   
   
   
   
   
   
 
 
  
 <!--FOOTER START-->
 <footer class="myfooter">
 <div class="container">
 <center>
 <div class="row">
  <div class="col-md-4"><font face="verdana" size="4" color="grey"> <b><span class="glyphicon glyphicon-search" aria-hidden="true"></span> <u>About Grabix</u></b></font>
  <br> <br>
  <font face="verdana" size="2" color="grey"><center>
Grabix, India's fast growing Coupon & deal platform, helps you save money through posting  of coupons, offers and discounted deals on its portal. </center> </font>  </div>
  <div class="col-md-4"><font face="verdana" size="4" color="grey"><b> <span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span> <u>Quick Links</u></b></font>
  <br>
  <br>    
  

  <p>  
   <a href="\business"><font face="Verdana" size="2" color="grey"><b> Advertise with us</b></font>  </a> 
	<br>
	<a href="\business"><font face="Verdana" size="2" color="grey"><b>Join Us</b></font> </a>
	<br>
    <a href="\ambassador"><font face="Verdana" size="2" color="grey"><b>  Campus Ambassador </b></font>	</a> 
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
    <a href="\contact"><font face="Verdana" size="2" color="grey"><b> Contact Us</b></font>	</a> 
  <br>
  <a href="\work" > <font face="Verdana" size="2" color="grey"><b>Work with Us</b></font></a>
  </p>
  
  
  
  
  
  
  </div>
</div>
</center>
 <div class="bottom-footer">
 
 © Copyright: Grabix Web Services 2017
 <br>
 <a href="http://ourdisclaimer.com/?i=Grabix.in"><b>Disclaimer </b></a><a href="\privacy"><b>| Privacy Policy</b></a>
 
 
 </div>
 </div>
 </footer>
 
 
 
 
 
 
 <!--FOOTER END-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>















 <!-- /container -->
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
	
	
  </body>
</html>
