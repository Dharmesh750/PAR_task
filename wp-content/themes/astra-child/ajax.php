<?php
add_action( 'wp_ajax_getformData', 'getformData' );
add_action( 'wp_ajax_nopriv_getformData', 'getformData' );  // If you need to handle unauthenticated requests as well

function getformData() {
    
    if(isset($_POST['formfield']) ) {  
        $form_data = $_POST['formfield'];
        // print_r($form_data);
        foreach($form_data as $field)
        {
            echo "Name: " . $field['name'] . " - Value: " . $field['value'] . "<br>";
        }

        // wp_send_json($response);
    } else {
        echo "empty";
    }
    exit();
}

