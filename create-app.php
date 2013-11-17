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
    <title>Create App</title>
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

<audio id="sound_click">
  <source src="media/click.mp3" type="audio/mp3" />
  <source src="media/click.ogg" type="audio/ogg" />
</audio>

<script type="text/javascript">
    var sound = document.getElementById("sound_click");
    document.getElementById("sound_click").defaultPlaybackRate = 1.5;
</script>

<body>     
    <div class = "container plusfour">

        <div class ="create_app_header"> Create App </div>

        <br><br>

        <!-- <form method="post" action="create-app.php" name="create_app" id="create_app">
            <label class="create_app_title">App Title</label><br>
            <input type="text" name="name" id="textbox1 app_name" />
            <br><br>
            <label class="create_app_title">Image Url</label><br>
            <input type="text" name="image_url" id="textbox1 app_image_url" />
            <input type="submit" class="browse_button" value="Create App" />
        </form> -->
        <form method="post" action="bin/create-app.php" name="create-app" id="create-app">
            <div class = "textbox_container1"> 
                <label class="create_app_title">App Title</label>
                <input type="text" name="app_name" class="textbox1" onmouseover="sound_click.play()" autofocus> 
            </div>

            <div class = "textbox_container3"> 
                <div class = "create_app_title"> Image URL </div>
                <input type="text" class="textbox1" onmouseover = "sound_click.play()"> 
                <button class = "browse_button" onmouseover = "sound_click.play()">Browse</button>
            </div>

            <br>
            <br>
           
            <div>
                <div class = "textbox_container1"> 
                    <div class ="create_app_shortcut"> Shortcut name </div>
                    <br>
                    <input type="text" class="textbox1" onmouseover = "sound_click.play()"> 
                    <br>
                    <br>
                </div> <!-- end .textbox_container1 -->

                <div class = "textbox_container2"> 
                    <div class ="create_app_shortcut"> Select shortcut here </div>
                    <br>
                    <div id='cssmenu'>
                        <ul>
                           <li class='has-sub' onmouseover = "sound_click.play()"><a href='#'><span>Key 1</span></a>
                                <ul>
                                     <li><a href='#'><span>Ctrl</span></a></li>
                                     <li><a href='#'><span>Alt</span></a></li>
                                     <li><a href='#'><span>Shift</span></a></li>
                                     <li><a href='#'><span>A</span></a></li>
                                     <li><a href='#'><span>B</span></a></li>
                                     <li><a href='#'><span>C</span></a></li>
                                     <li><a href='#'><span>D</span></a></li>
                                     <li><a href='#'><span>E</span></a></li>
                                     <li><a href='#'><span>F</span></a></li>
                                     <li><a href='#'><span>G</span></a></li>
                                     <li><a href='#'><span>H</span></a></li>
                                     <li><a href='#'><span>I</span></a></li>
                                     <li><a href='#'><span>J</span></a></li>
                                     <li><a href='#'><span>K</span></a></li>
                                     <li><a href='#'><span>L</span></a></li>
                                     <li><a href='#'><span>M</span></a></li>
                                     <li><a href='#'><span>N</span></a></li>
                                     <li><a href='#'><span>O</span></a></li>
                                     <li><a href='#'><span>P</span></a></li>
                                     <li><a href='#'><span>Q</span></a></li>
                                     <li><a href='#'><span>R</span></a></li>
                                     <li><a href='#'><span>S</span></a></li>
                                     <li><a href='#'><span>T</span></a></li>
                                     <li><a href='#'><span>U</span></a></li>
                                     <li><a href='#'><span>V</span></a></li>
                                     <li><a href='#'><span>W</span></a></li>
                                     <li><a href='#'><span>X</span></a></li>
                                     <li><a href='#'><span>Y</span></a></li>
                                     <li><a href='#'><span>Z</span></a></li>
                                </ul>
                            </li>
                           
                            <li class='has-sub' onmouseover = "sound_click.play()"><a href='#'><span>Key 2</span></a>
                                <ul>
                                     <li><a href='#'><span>Ctrl</span></a></li>
                                     <li><a href='#'><span>Alt</span></a></li>
                                     <li><a href='#'><span>Shift</span></a></li>
                                     <li><a href='#'><span>A</span></a></li>
                                     <li><a href='#'><span>B</span></a></li>
                                     <li><a href='#'><span>C</span></a></li>
                                     <li><a href='#'><span>D</span></a></li>
                                     <li><a href='#'><span>E</span></a></li>
                                     <li><a href='#'><span>F</span></a></li>
                                     <li><a href='#'><span>G</span></a></li>
                                     <li><a href='#'><span>H</span></a></li>
                                     <li><a href='#'><span>I</span></a></li>
                                     <li><a href='#'><span>J</span></a></li>
                                     <li><a href='#'><span>K</span></a></li>
                                     <li><a href='#'><span>L</span></a></li>
                                     <li><a href='#'><span>M</span></a></li>
                                     <li><a href='#'><span>N</span></a></li>
                                     <li><a href='#'><span>O</span></a></li>
                                     <li><a href='#'><span>P</span></a></li>
                                     <li><a href='#'><span>Q</span></a></li>
                                     <li><a href='#'><span>R</span></a></li>
                                     <li><a href='#'><span>S</span></a></li>
                                     <li><a href='#'><span>T</span></a></li>
                                     <li><a href='#'><span>U</span></a></li>
                                     <li><a href='#'><span>V</span></a></li>
                                     <li><a href='#'><span>W</span></a></li>
                                     <li><a href='#'><span>X</span></a></li>
                                     <li><a href='#'><span>Y</span></a></li>
                                     <li><a href='#'><span>Z</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <br><br> 
                </div> <!-- end .textbox_container2 -->

                <div class = "textbox_container3"> 
                    <div class ="create_app_shortcut"> Image URL </div>
                    <br>
                    <input type="text" class="textbox1" onmouseover = "sound_click.play()" /> 
                    <?php
                    // Where the file is going to be placed 
                    // if (isset($_POST['uploadedfile'])){

                        // $target_path = "uploads/";

                        /* Add the original filename to our target path.  
                        Result is "uploads/filename.extension" */

                        // $target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
                      
                        //echo $target_path;

                        // ($_FILES['uploadedfile']['tmp_name'], $target_path)) {
                        //     echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
                        //     " has been uploaded";
                        //     echo "<div>";
                        //     echo "<img class= 'icon' src = $target_path>" ;
                        //     echo "</div>";

                        // } else{
                        //     echo "There was an error uploading the file, please try again!";
                        // }
                    // }

                    ?>
                    <form enctype="multipart/form-data" action="create-app.php" method="POST" id="upload_image"> <br>
                        <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
                        or Choose a file to upload: 
                        <input name="uploadedfile"  type="file" class = "browse_button" onmouseover = "sound_click.play()"/>
                        <!-- <input type="submit" value="Upload File" align="right" class = "browse_button" onmouseover = "sound_click.play()" /> -->
                    </form>
                    <button class="browse_button" onmouseover="sound_click.play()">Browse</button> 
                    <input type="submit" class="browse_button" onmouseover="sound_click.play()" value="Submit">
                    <br><br>
                </div> <!-- end .textbox_container3 -->
            </div>
        </form>
        <div id="result"></div>
    </div> <!-- end .container.plusfour -->
    

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/edit.js"></script>
</body>