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
    <form method="post" action="data.php" name="create_shortcut" id="create_shortcut">
        <label>Name:</label>
        <input type="text" id="short_name" name="name" autofocus/>
        <label>Shortcut:</label>
        <input type="text" id="short_hotkey" name="shortcut"  />
        <label>Image Url:</label>
        <input type="text" id="short_image" name="image_url"  />
        <input type="submit" value="Create Shortcut" />
        
    </form>
    <div id="result"></div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('form#create_shortcut').submit(function() {
               var formInput = $(this).serialize();
                $.post(
                    $(this).attr('action'),
                    formInput,
                    function(data, textStatus, jqXHR){
                        $("#result").html(data);
                    }
                );         
                return false;   
            });
        });
    </script>
</body>
</html>