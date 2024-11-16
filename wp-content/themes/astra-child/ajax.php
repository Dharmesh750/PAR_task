<?php
add_action( 'wp_ajax_getformData', 'getformData' );
add_action( 'wp_ajax_nopriv_getformData', 'getformData' );  // If you need to handle unauthenticated requests as well

function getformData() {
    
    if(isset($_POST['formfield']) ) {  
        global $wpdb;
        $form_data = $_POST['formfield'];
        $form = [];
        foreach($form_data as $field){
            $form[$field['name']]=$field['value'];
        }
        print_r($form);
        
    $table_name = $wpdb->prefix . 'wp_subscribe';
    $table_exists = $wpdb->get_var("SHOW TABLES LIKE '$table_name'");

    if ($table_exists != $table_name) {
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
            id INT(11) NOT NULL AUTO_INCREMENT,
            plan VARCHAR(255) NOT NULL,
            user_id INT(11) NOT NULL,
            `option` VARCHAR(255) NOT NULL,
            picklocation VARCHAR(255) NOT NULL,
            date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
            PRIMARY KEY (id)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);

    } else {
        echo "empty";
    }
    exit();
}
}
function insert_subscribe_data($plan, $user_id, $option, $picklocation) {
    global $wpdb;

    // Table name with prefix
    $table_name = $wpdb->prefix . 'wp_subscribe';

    // Ensure the table exists before inserting data
    check_and_create_wp_subscribe_table();

    // Data to insert
    $data = array(
        'plan' => $plan,
        'user_id' => $user_id,
        'option' => $option,
        'picklocation' => $picklocation,
        'date' => current_time('mysql'), // Get current time in MySQL format
    );

    // Format for each data field
    $format = array('%s', '%d', '%s', '%s', '%s');

    // Insert the data into the table
    $wpdb->insert($table_name, $data, $format);

    // Check for errors
    if ($wpdb->last_error) {
        // Handle error if necessary
        return false;
    }

    return true;
}

