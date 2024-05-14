<?php
	require 'connection.php';
	if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];
        $delete_sql = " DELETE FROM `doctor_registration` WHERE id = '".$user_id."'";
        $del_response = mysqli_query($conn, $delete_sql);
          
        if($del_response) {
            echo '1';
        } else {
            echo '2';
        }  
    }
?>