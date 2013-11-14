$j = jQuery.noConflict();

$j(function() { 
    $j("form#create_shortcut").hide();

    $j(".new_shortcut").click(function(){
        $j("form#create_shortcut").slideDown();
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
}); 



