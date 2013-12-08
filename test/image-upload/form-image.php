<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Ajax Form</title>        
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
    <form enctype="multipart/form-data" method="post" name="fileinfo" id="create_app">
        <label>App Title</label>
        <input type="text" name="app_name" autocomplete="on" maxlength="64" value="Illustrator" required />
  
        <label>Image</label>
        <input type="file" name="app_image" required />
    </form>
    <div id="result"></div>
    <a href="javascript:createApp()">Create App</a>
    

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        function createApp() {
            var result = document.getElementById("result"),
                formData = new FormData(document.forms.namedItem("fileinfo"));

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "stash.php", true);
            xhr.onload = function(oEvent) {
                if (xhr.status == 200) {
                    console.log(xhr);
                    console.log(xhr.status);

                    result.innerHTML = xhr.responseText;
                } else {
                    result.innerHTML = "Error " + xhr.status + " occurred.";
                }
            };

            xhr.send(formData);
        }
    </script>
</body>
</html>