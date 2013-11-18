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

    <style>
    input {
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      border:1px solid #ccc;
      font-size:20px;
      width:300px;
      min-height:30px;
      display:block;
      margin-bottom:15px;
      margin-top:5px;
      outline: none;

      -webkit-border-radius:5px;
      -moz-border-radius:5px;
      -o-border-radius:5px;
      -ms-border-radius:5px;
      border-radius:5px;
    }
  </style>
    <script src="js/less.js" type="text/javascript"></script>
</head>

<?php 
require_once 'downloads/medoo.min.php';

$database = new medoo('macadamia_cluster_02');


$app_id = $_GET["id"];

$app = $database->get("apps", "*", ["id"=>$app_id]);

function getShortcuts($database, $app_id) {
    $shortcuts = $database->select("shortcuts", [
        "shortcuts.id",
        "shortcuts.app_id",
        "shortcuts.name",
        "shortcuts.shortcut",
        "shortcuts.image_url"
    ], [
        "shortcuts.app_id" => $app_id,
        "ORDER" => "shortcuts.name ASC",
        "LIMIT" => 50
    ]);
    return $shortcuts;
}

$shortcuts = getShortcuts($database, $app_id);

if (isset($_POST['name'])) {

    $app_id = $_POST['app_id'];
    $name = $_POST['name'];
    $shortcut = $_POST['shortcut'];

    // validate image url
    if(trim($_POST['image_url']) === '') {
        $image_url = "icons/photoshop/blur.png";
    } else {
        $image_url = trim($_POST['image']);
    }

    $database->insert("shortcuts", [
        "app_id" => $app_id,
        "name" => $name,
        "shortcut" => $shortcut,
        "image_url" => $image_url
    ]);                      
}
?>
<body>
    <div id="container">   
        <section class="container" id="main">       
            <div class="four columns alpha" id="left-col">
                
                <div class="score">
                    <div>
                        <span class="points">0</span> points
                    </div>
                    <div>
                        <span class="scoreStreak">0</span> in a row | <span class="scoreMultiplier">1</span>x multiplier | <span class="percentage">0</span>% correct 
                    </div>
                </div>
                
                <div class="current-software" id="buttons">
                    <img id="application-logo" src="icons/software-icon.png">
                    <h2><span id="application-name">Photoshop</span></h2>
                    <button class="button" id="new-game">New Game</button>
                    
                    <button class="button" id="reset">Reset</button>

                    <img id="logo" class="logo-main" src="icons/logo.png" alt="tut tut revolution logo">
                </div>
                
                <div id="my-modal" class="reveal-modal">
                    <div id="modal_container">
                        <h1><?php echo $app["name"]; ?></h1>
                        <!-- <img id="logo" class="logo-modal" src="icons/logo.png" alt="tut tut revolution logo"> -->
                        <h2>Select 4 shortcuts you would like to train on.</h2>
                        <div id="icon_holder">  
                            <form method="post" action="game.php" name="create_shortcut" id="create_shortcut">
                               
                                <div class ="create_app_shortcut"> Shortcut name </div><br>
                                <input type="text" name="shortcut" id="shortcut_code" required class="textbox1" onmouseover = "sound_click.play()"> <br><br>
                                <!-- <input type="text" name="shortcut" id="shortcut_code" required/> -->
                                <label>Image:</label>
                                <input type="text" name="image_url" id="shortcode_image_url" />
                                <input type="hidden" name="app_id" value="<?php echo $app_id; ?>"/>
                                <input type="submit" value="Create Shortcut" />
                            </form>
                            
                            <div class="new_shortcut"></div>

                            <?php                            
                            foreach ($shortcuts as $sc):
                            ?>
                            <div
                                class="icon_selector"
                                id="icon-<?php echo $sc['id']; ?>" 
                                data-id="<?php echo $sc['id']; ?>"
                                data-shortcut="<?php echo $sc['shortcut']; ?>"
                                data-name="<?php echo $sc['name']; ?>"
                                style="background-image:url('<?php echo $sc['image_url']; ?>');">   
                            </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                        
                        <ul class="active-selections">
                            Currently selected tools:
                        </ul>

                        <button class="button" id="start">Start</button>  
                    </div>
                </div>
            </div>

            <div class="twelve columns omega" id="main-col">
                <div class="row" id="top-row">
                    <div id="lifebar">
                        <div id="lifebar-scale"></div>
                    </div>
                </div>
                <div class="row" id="board">
                    <div class="three columns alpha" id="col1-board">
                        <div class="icon-background"></div>
                    </div>
                    <div class="three columns" id="col2-board">
                        <div class="icon-background"></div>
                    </div>
                    <div class="three columns" id="col3-board">
                        <div class="icon-background"></div>
                    </div>
                    <div class="three columns omega" id="col4-board">
                        <div class="icon-background"></div>
                    </div>
                </div>
            </div>
        </section><!-- /main -->        
        <footer>
        </footer><!-- /footer -->
    </div><!--!/#container -->
    <div id="music"></div>
    <!-- !Javascript - at the bottom for fast page loading -->
    <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>!window.jQuery && document.write('<script src=//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><\/script>')</script>
    
    <script src="js/scoring.js"></script>
    <script src="js/hotkeys.js"></script>
    <script src="js/jquery.reveal.js"></script>
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/game.js"></script>
    <script src="js/edit.js"></script>
    
</body>
</html>