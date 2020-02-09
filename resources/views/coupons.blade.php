 <!DOCTYPE html>
<html lang="en">
  <head>
  
   <title>Coupons Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="top coupons,best online shopping coupon codes">
    <meta name="keywords" content="best coupons,online coupons,paytm coupon codes,ajio coupon codes,dominos coupons,myntra coupons,jabong coupons">
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


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	
	
	
	
	
	
	
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>
	
	
	
	
	<div class="top-header1 no-margin">

	<div class="row"><center>
  <div class="col-md-4">
   <img height="120px" width="160px" src="/images/logo.png"></img>

  </div>
  <div class="col-md-4"> </div>
  <div class="col-md-4"><br><br><font face="Georgia" size="4" color="white"><b>#Support@grabix.in</b></font></div>
  </center>
</div>
	
	
	
</div>

<nav class="navbar navbar-custom no-border" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><p style="font-family:cursive;font-size:18px"># Save with Us</p></a>
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
                    <li>
                        <a href="\coupon"><b>Coupon</b></a>
                    </li>
                       <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><b>Popular Stores </b><b class="caret"></b></a>
                     <ul role="menu" class="dropdown-menu">
                        <li><a href="\paytm">Paytm</a></li>
                        <li><a href="\ajio">Ajio</a></li>
                        <li><a href="\ebay">Ebay</a></li>
                        <li><a href="\flipkart">Flipkart</a></li>
						 <li><a href="\amazon">Amazon</a></li>
                        <li><a href="\mobikwik">Mobikwik</a></li>
                        <li><a href="\bigrock">Bigrock</a></li>
                        <li><a href="\myntra">Myntra</a></li>
						<li><a href="\jabong">Jabong</a></li>
                       
                    </ul>
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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
<div class="container"> <!--container start-->
<br><center>
         <font face="Helvetica" size="4" color="red"><b># Fastest Growing Coupon</b></font>
         <font face="Helvetica" size="4" color="grey"><b>& Deals platform</b></font>

        
    </center>
 
 


 
 
 


 
 
 
 <!--COUPON BOXES-->
 

<div class="myborder"></div>
 
 
<div class="row">
@foreach($coupon as $c)
 
  <div class="col-md-3">                                                             <!--COUOPON BOX -->
 
  
<div class="panel panel-success">

  <div class="panel-body ">
  <center>
    <img class="boximg2" src="{{$c->Image_URL}}"></img>
	<hr> </center>
	<center>
	<strong>
	<br>{{$c->Description}}
	</strong>
	</center>
	 <center>  
	  
  <!-- Button trigger modal -->
<div class="mybutton2" data-toggle="modal" data-target="#myModal$i">
  <font face="Sans-serif" size="2" color="white"><center><b>Grab Deal</b></center></font>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal$i" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> {{$c->Merchant}} Coupon</h4>
         <img class="boximg2" src="{{$c->Image_URL}}"></img>
         
         
         
      </div>
      <div class="modal-body">
           <strong>COUPON CODE: <div style="border-style: dotted;padding:auto;">  {{$c->Coupon_Code}} </div>   </strong> <br>  Just Copy and paste<br>
                      {{$c->Title}} {{$c->Description}}   <br>Expiry:  {{$c->End_Date}}   <br> <strong>Terms and Conditions:</strong><br>  {{$c->Terms}}                                                                   <!--COUPON CONTEnt1-->
      </div>
      <div class="modal-footer">
	 <center> 
     	 <a href="{{$c->URL }}">
	   
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



 
 
 
 
 
 
 
 
 
 
 
 
 </div>
 
</div> <!--container END-->
	













  
  
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
<br>

    <!-- Bootstrap core JavaScript
    ================================================== -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/static/js/bootstrap.min.js"></script>
    <script src="/static/js/docs.min.js"></script>
	 <script src="/static/myjava.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/static/js/ie10-viewport-bug-workaround.js"></script>
	
	
	
	
	
	
	
	
	
	
	
	

  </body>
</html>