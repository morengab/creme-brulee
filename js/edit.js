$j = jQuery.noConflict();

$j(function() { 
    hideShortcutModal();
    toggleModifiers();
    
    $j(".new_shortcut").click(function(){
        $j("form#create-shortcut").slideToggle();
    });

    $j("input#shortcut_image").change(function (event){
        previewShortcutFile(event.target.files[0]);
    });

    document.getElementById("shortcut_code").value = "";
});

function hideShortcutModal() {
    $j('form#create-shortcut').hide();
}

function createShortcut() {
    var result = document.getElementById("result"),
        formData = new FormData(document.forms.namedItem("create-shortcut"));

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "bin/create-shortcut.php", true);
    xhr.onload = function(e) {
        if (xhr.status == 200) {
            hideShortcutModal();
            console.log(xhr.response);
        } else {
            result.innerHTML = "Error " + xhr.status + " occurred.<br \/>";
        }
    };
    xhr.send(formData);
}

function previewShortcutFile(file) {
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
            document.getElementById("shortcut_code").value += "shift ";
        });

        keypress.combo("ctrl", function() {
            document.getElementById("shortcut_code").value += "ctrl ";
        });

        keypress.combo("alt", function() {
            document.getElementById("shortcut_code").value += "alt ";
        });

        keypress.combo("meta", function() {
            document.getElementById("shortcut_code").value += "cmd ";
        });
    }

    document.getElementById("toggle_modifiers").dataset.detect = toggle;
    $j("#shortcut_code").focus();
}