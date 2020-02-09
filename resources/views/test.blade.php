<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/jqui.css">
  <script type="text/javascript" src="/jq2.js"></script>
  <script type="text/javascript" src="/jq1.js"></script>
  <script type="text/javascript">
  
  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 1000,
      max: 50000,
      values: [ 4000, 8000 ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		$( "#amount1" ).val(ui.values[ 0 ]);
		$( "#amount2" ).val(ui.values[ 1 ]);
      }
    });
    $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });
  </script>
</head>

<body>

  <p>
    Price Range:<p id="amount"></p>
  </p>

  <div id="slider-range"></div>

 <form action="/comp" method="post">
    <input type="hidden"  name="start">
    <input type="hidden"   name="end">
    <input type="submit" name="submit_range" value="Submit">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>
  
  
  <form class="form-horizontal" method="post" action="/comp">

<div class="form-group">
    <label for="lower" class="col-lg-2 control-label">
        lower
    </label>
	 <div class="col-lg-10">
        <input type="text" class="form-control"  name="upper" id="lower" value="a">
    </div>
	
	<label for="lower" class="col-lg-2 control-label">
        upper
    </label>
    <div class="col-lg-10">
        <input type="text" class="form-control"  name="lower" id="lower" value="a">
    </div>
</div>


<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Create</button>

    </div>
</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

  
  
</body>
</html>