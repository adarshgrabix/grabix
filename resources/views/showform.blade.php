<!DOCTYPE html>
<html lang="en">
  <head>
  
       <title>Reset Password</title>
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
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	

   

    
   	<center> <img height="50px" src="/images/abg.jpg" class="img-responsive" alt="Responsive image"> </center>
	
	 <div class="container" role="main">
	 <br>
	 <br><center>
      <span   style="color:#33373D; letter-spacing: 2px; font-weight: 600; font-size:24px; font-family:arial;"><b>Know More About Us</b></span></center>
	   
   
<br>
<div class="panel panel-default">
  <div class="panel-body">
   <p style="font-family:Verdana;font-size:18px;font-color:#33373D"><strong>What is Grabix</strong></p>
   

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <!--<ul>
                     @foreach( $errors->all() as $message )
                     <li>{{ $message }}</li>
                     @endforeach
                 </ul>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif-->

                    <form class="form-horizontal" method="POST" action="/resetprocess">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
	
	
	
	
	
   </div>
   </div>
   
   <div class="panel panel-default">
  <div class="panel-body">
  <center> <span style="color:#33373D; letter-spacing: 2px; font-weight: 600; font-size:24px; font-family:arial;"><b>Be part of our journey</b></span>
  <br><p style="font-family:arial;font-size:16px;text-align:justify">
  We're always looking for great minds to join us on our journey. If you want to be a part of our mission, we'd love to talk.
  Explore our team to see if there's a role that excites you. If there isn't one and we like each other, we'll create one for you.
  </p><br>
  <a href="/work">
      <div  class="specialbtn"> 
	   <font face="Sans-serif" size="3" color="white"><center><b>Work With Us</b></center></font>
	 </div></a>
  </center>
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
