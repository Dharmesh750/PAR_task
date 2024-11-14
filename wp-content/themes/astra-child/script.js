jQuery(document).ready(function($){
    alert("ready");
    jQuery("#subcribe_plan").on("change",function(){
        console.log(jQuery(this).val());
        if(jQuery(this).val()!= 0){
            jQuery("#option_type").css("display","block");
        }else{
            jQuery("#option_type").css("display","none");
            alert("Please select an option!");
            jQuery(this).focus();
            return; 
        }
    })
})