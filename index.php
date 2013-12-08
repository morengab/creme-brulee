<!DOCTYPE html>   
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<!--[if IE]><![endif]-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title></title>
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- !CSS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet/less" text="text/css" href="css/normalize.less">
	<link rel="stylesheet/less" text="text/css" href="css/base.less">
	<link rel="stylesheet/less" text="text/css" href="css/icon.less">
	<link rel="stylesheet/less" text="text/css" href="css/eric-test-css.less">

	<!-- Uncomment if you are specifically targeting less enabled mobile browsers
	<link rel="stylesheet" media="handheld" href="css/handheld.css?v=1">  -->
	<!-- !Modernizr - All other JS at bottom -->
	<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<script src="js/less.js" type="text/javascript"></script>
</head>
<?php 
require_once 'downloads/medoo.min.php';
$database = new medoo('macadamia_cluster_02');
?>
<body>
<audio id="sound">
  <source src="media/flipcard.mp3" type="audio/mp3" />
  <source src="media/flipcard.ogg" type="audio/ogg" />
</audio>

<script type="text/javascript">
    var sound = document.getElementById("sound");
    document.getElementById("sound").defaultPlaybackRate = 1.1;
</script>

<div class="whole_container">

	<div class="head_container"> 
		<img id="logo2" src="icons/logo2.png" alt="tut tut revolution logo">
	</div>

	<div class="container">
		<div class="flip-container" ontouchstart="this.classList.toggle('hover')">
			<div class="flipper">
				<div class="front" onmouseover="sound.play()">
					<div class ="app_front_plus"><img class="resize_logo" src="icons/plus.png"></div>
				</div>
				<div class="back" onmouseout="sound.play()"> 
					<a href="javascript:showAppModal()">
						<div class="app_back"><img class="resize_logo" src="icons/plus.png"> </div>
						<div class="create"> Create your own app!</div>
					</a>
				</div>
			</div>
		</div>
		
		<div id="app_container">
			<?php
			$apps = $database->select("apps", "*");
			foreach ($apps as $app):
			?>
			<div class="flip-container" ontouchstart="this.classList.toggle('hover')">
				<div class="flipper">
					<div class="front" onmouseover = "sound.play()">
						<div class ="app_front"> <img class = "resize_logo" src = "<?php echo $app['image_url'];?>"> </div>
					</div>
					<div class="back" onmouseout = "sound.play()"> 
						<a href = "<?php echo 'game.php?id='. $app['id']; ?>">
							<div class="app_back"><img class = "resize_logo" src = "<?php echo $app['image_url'];?>"> </div>
							<div class= "play">PLAY</div>
						</a>
					</div>
				</div>
				<h2><?php echo $app["name"]; ?></h2>
				<p class="plays">Played <?php echo $app["plays"]; ?>x</p>
			</div>
			<?php
			endforeach;
			?>
		</div>
		
		<div id="my-modal" class="reveal-modal app-modal">
            <form enctype="multipart/form-data" method="post" name="fileinfo" id="create_app">
            	<label>Name</label>
		        <input type="text" name="app_name" autocomplete="on" maxlength="64" value="Illustrator" id="app_name" required />
            	
            	<label>Image</label>
		        <input type="file" name="app_image" id="app_image" required/>
		    	
            	<div id="app_image_preview"></div>

		    	<a href="javascript:createApp()">Create</a>
		    	<a href="javascript:hideAppModal()">Cancel</a>
		    </form>
		    <div id="result"></div>
		    
        </div>

	</div> 
	<!-- end .container -->
</div>
<!-- end .whole_container -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.reveal.js"></script>
<script src="js/app.js"></script>
<script src="js/keypress.js"></script>

</body>
</html>