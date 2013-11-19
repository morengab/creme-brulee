$j = jQuery.noConflict();

$j(document).ready(function() {
    showAppModal();
    
    $j("#app_image").change(function(event){
        previewFile(event.target.files[0]);
    });
});

function previewFile(file) {
    var preview = document.getElementById("app_image_preview");
    if (typeof FileReader != 'undefined') {
        var reader = new FileReader();
        reader.onload = function (event) {
            var image = new Image();
            image.src = event.target.result;
            image.width = 285; // a fake resize
            preview.innerHTML = "";
            preview.appendChild(image);
        };
        reader.readAsDataURL(file);
    } else {
        preview.innerHTML += '<p>Uploaded ' + file.name + ' ' + (file.size ? (file.size/1024|0) + 'K' : '');
    }
}

function showAppModal() {
    // show modal on page load
    $j('#my-modal').reveal({
        animation: 'fade',                   //fade, fadeAndPop, none
        animationspeed: 300,                 //how fast animtions are
        closeonbackgroundclick: false
    });
    $j('#my-modal').trigger('reveal:open');
}

function hideAppModal() {
    $j('#my-modal').trigger('reveal:close');
}

function createApp() {
    var result = document.getElementById("result"),
        formData = new FormData(document.forms.namedItem("fileinfo"));

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "bin/create-app.php", true);
    xhr.onload = function(e) {
        if (xhr.status == 200) {
            result.innerHTML = xhr.responseText;
        } else {
            result.innerHTML = "Error " + xhr.status + " occurred uploading your file.<br \/>";
        }
    };

    xhr.send(formData);
}