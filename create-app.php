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
    <link rel="stylesheet/less" text="text/css" href="css/create-app.less">

    <!-- Uncomment if you are specifically targeting less enabled mobile browsers
    <link rel="stylesheet" media="handheld" href="css/handheld.css?v=1">  -->
    <!-- !Modernizr - All other JS at bottom -->
    <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <script src="js/less.js" type="text/javascript"></script>
</head>


<audio id="sound">
  <source src="media/flipcard.mp3" type="audio/mp3" />
  <source src="media/flipcard.ogg" type="audio/ogg" />
 </audio>

<script type="text/javascript">
    var sound = document.getElementById("sound");
    document.getElementById("sound").defaultPlaybackRate = 1.1;
</script>

        
        <div class = "container">
            <div class ="create_app_header"> Create Apps </div>
            <br><br>
            <div class = "textbox_container1"> 
                <div class = "create_app_title"> App Title </div>
                <input type="text" id="textbox1"> 
            </div>

            <div class = "textbox_container3"> 
                <div class = "create_app_title"> Image URL </div>
                <input type="text" id="textbox1"> <button class = "browse_button"> Browse 
            </button>
            </div>
            <br><br>
            <div></div>
        <div class = "textbox_container1"> 
            <div class ="create_app_shortcut"> Shortcut name </div>
            <br>
            <input type="text" id="textbox1"> 
            <br><br>
            <input type="text" id="textbox1"> 
            <br><br>
            <input type="text" id="textbox1"> 
            <br><br>
            <input type="text" id="textbox1"> 
            <br><br>
            <input type="text" id="textbox1"> 
            <br><br>
        </div>

        <div class = "textbox_container2"> 
            <div class ="create_app_shortcut"> Press shortcut here </div>
            <br>
            <input type="text" id="textbox1"> 
            <br><br>
            <input type="text" id="textbox1"> 
            <br><br>
            <input type="text" id="textbox1"> 
            <br><br>
            <input type="text" id="textbox1"> 
            <br><br>
            <input type="text" id="textbox1"> 
            <br><br>
        </div>

        <div class = "textbox_container3"> 
            <div class ="create_app_shortcut"> Image URL </div>
            <br>
            <input type="text" id="textbox1"> <button class = "browse_button"> Browse </button>
            <br><br>
            <input type="text" id="textbox1"> <button class = "browse_button"> Browse </button>
            <br><br>
            <input type="text" id="textbox1"> <button class = "browse_button"> Browse </button>
            <br><br>
            <input type="text" id="textbox1"> <button class = "browse_button"> Browse </button>
            <br><br>
            <input type="text" id="textbox1"> <button class = "browse_button"> Browse </button>
            <br><br>
        </div>

        <br>







<style> 
#textbox1 
{ 
border: 2px solid rgb(173, 204, 204); 
height: 31px; 
width: 150px; 
box-shadow: 0px 0px 20px rgb(204, 204, 204) inset; 
transition:500ms all ease; 
padding:3px 3px 3px 3px; 
} 
 
#textbox1:hover, #textbox1:focus 
{ 
width:200px; 
transition:500ms all ease; 
background: url('icons/plus_blue.png') no-repeat right; 
background-size:25px 25px; 
background-position:96% 62%; 
padding:3px 32px 3px 3px; 
} 


</style>


   
  
</body>