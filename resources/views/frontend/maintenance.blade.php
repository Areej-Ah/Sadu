<!DOCTYPE html>
<html lang="en">

 <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
    <meta name="author" content="INSPIRO" /> 
    <meta name="description" content="Themeforest Template Polo"> 
    <title>POLO | The Multi-Purpose HTML5 Template</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" /> 
    <link href="{{ url('frontend/Polo') }}/css/plugins.css" rel="stylesheet"> 
    <link href="{{ url('frontend/Polo') }}/css/style.css" rel="stylesheet">
    <link href="{{ url('frontend/Polo') }}/css/responsive.css" rel="stylesheet"> 
</head>

<body>	
    
<!-- Wrapper -->
<div id="wrapper">


<section class="fullscreen text-center">
	<div class="container container-fullscreen">
		<div class="text-middle text-center">
			<i class="fa fa-exclamation-triangle fa-5x" style="color: #ffd530;"></i>
            <h1 class="text-uppercase text-large"> {!! setting()->message_maintenance !!} </h1>
			<p class="lead">We are currently working on our website, well be back soon!</p>
		</div>
	</div>


	<div class="progress-bar-container title-up small">
		<div class="progress-bar" data-percent="20" data-delay="100" data-type="%" style="background-color:#ffd530">
			<div class="progress-title">DEVELOPMENT PROGRESS</div>
		</div>
	</div>
</section>
		
		</div>    <!-- end: Wrapper -->

    <!-- Go to top button -->
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>


<!--Plugins-->
 <script src="{{ url('frontend/Polo') }}/js/jquery.js"></script>
 <script src="{{ url('frontend/Polo') }}/js/plugins.js"></script>

<!--Template functions-->
 <script src="{{ url('frontend/Polo') }}/js/functions.js"></script> 


</body>
</html>


