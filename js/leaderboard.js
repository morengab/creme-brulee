$j = jQuery.noConflict();

$j(document).ready(function () {

});

function addHighScore() {
    var score = getUrlVars()["score"],
        app_id = getUrlVars()["app_id"];

    $j.ajax({
        url: "bin/add-high-score.php",
        data: {
            app_id: app_id,
            score: score,
            name: $j("#high_scorer_name").val()
        },
        success: function (data, textStatus, xhr) { debugger;
            var response = JSON.parse(data);
            
            
        },
        error: function (xhr, textStatus, error) { debugger;
            console.log(xhr.responseText);
            console.log(textStatus);
            console.log(error);
        }
    });

}

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}