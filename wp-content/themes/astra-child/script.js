jQuery(document).ready(function($){
    // alert("ready");
    console.log(ajax_access);
    jQuery("#subcribe_plan").on("change",function(){
        if(jQuery(this).val()!= 0){
            jQuery("#option_type").css("display","block");
        }else{
            jQuery("#option_type").css("display","none");
            alert("Please select an options!");
            jQuery(this).focus();
            return; 
        }
    })
    jQuery("#option_type").on("change",function(){
        var option_val = jQuery(this).val();
        if(option_val!= 0 ){
            if(option_val == "pickup"){
                jQuery("#pickup_form").css("display","block");
            }else{
                jQuery("#pickup_form").css("display","none");
                alert("Please select an option!");
                jQuery(this).focus();
                return; 
            }
        }
    })
    jQuery("#plan_submit").on("click", function(e){
        e.preventDefault();
        var formdata = jQuery("#subscribe_form").serializeArray();
        console.log(formdata);
        jQuery.ajax({
            url: ajax_access.ajax_url,
            method: 'POST',
            data: {
                action: 'getformData',
                formfield : formdata,
            },
            success: function(msg){
                console.log("called : "+msg);
            },error: function(xhr, status, error) {
                console.log('Error:', status, error);
                console.log('XHR:', xhr.responseText);  // Detailed error response from the server
            }
        });
    });
})