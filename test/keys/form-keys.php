<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Key Input</title>

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
</head>

<body>
    
    <form method="post" action="data.php" name="create_shortcut" id="create_shortcut">
        <label>Key</label>
        <input type="text" id="short_name" name="name" placeholder="ctrl x"/>
        <br>
        <p><a id="toggle_modifiers" data-detect="false" href="javascript:toggleModifiers()">Don't detect modifiers</a></p>
        <input type="submit" value="Create Shortcut" />
    </form>
    <div id="result"></div>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="../../js/keypress.js"></script>
    <script>
        $(document).ready(function() {
           toggleModifiers();
        });

        function toggleModifiers () {
            var toggle = document.getElementById("toggle_modifiers").dataset['detect'];
            if (toggle === "true") {
                toggle = "false";
                document.getElementById("toggle_modifiers").innerHTML = "Detect modifiers";
                keypress.reset();
            } else {
                toggle = "true";
                document.getElementById("toggle_modifiers").innerHTML = "Don't detect modifiers";
                    keypress.combo("shift", function() {
                    document.getElementById("short_name").value += "shift ";
                });

                keypress.combo("ctrl", function() {
                    document.getElementById("short_name").value += "ctrl ";
                });

                keypress.combo("alt", function() {
                    document.getElementById("short_name").value += "alt ";
                });

                keypress.combo("meta", function() {
                    document.getElementById("short_name").value += "cmd ";
                });
            }

            document.getElementById("toggle_modifiers").dataset.detect = toggle;
            $("#short_name").focus();
        }
    </script>
</body>
</html>