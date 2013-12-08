$j = jQuery.noConflict();

$j(function() { 
    // $j("form#create-shortcut").hide();

    $j(".new_shortcut").click(function(){
        $j("form#create-shortcut").slideToggle();
    });

    $j('form#create_shortcut').submit(function() {
        var formInput = $j(this).serialize();
        $j.post(
            $j(this).attr('action'),
            formInput,
            function(data, textStatus, jqXHR){
                console.log(data);
                // clear inputs
                $j("input#shortcut_name").val("");
                $j("input#shortcut_code").val("");
                $j("input#shortcut_image_url").val("");

                // hide form
                $j("form#create_shortcut").slideUp();
            });

        return false;
    });

    $j("input#shortcut_image").change(function (event){
        previewFile(event.target.files[0]);
    });
});

function previewFile(file) {
    var preview = document.getElementById("shortcut_image_preview");
    if (typeof FileReader != 'undefined') {
        var reader = new FileReader();
        reader.onload = function (event) {
            var image = new Image();
            image.src = event.target.result;
            image.width = 100; // a fake resize
            preview.innerHTML = "";
            preview.appendChild(image);
        };
        reader.readAsDataURL(file);
    } else {
        preview.innerHTML += '<p>Uploaded ' + file.name + ' ' + (file.size ? (file.size/1024|0) + 'K' : '');
    }
}

function hideShortcutModal() {
    $j('form#create-shortcut').hide();
}