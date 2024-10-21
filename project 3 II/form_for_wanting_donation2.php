<?php 
    error_reporting(0);
    $dbhost = "localhost";
    $dbuser = "root"; 
    $dbpass = "";
    $db = "project 3 ii";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) ;
    // $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    else if($conn)
    {
        echo "Connected: ";
        $u_name = $_POST['u_name'];
        $u_faculty = $_POST['u_faculty'];
        $u_id = $_POST['u_id'];
        $u_gender = $_POST['u_gender'];
        $u_number = $_POST['u_number'];
        $u_email = $_POST['u_email'];
        $u_permanent_add = $_POST['u_permanent_add'];
        $u_local_add = $_POST['u_local_add'];
        $u_amount_need = $_POST['u_amount_need'];
        $u_purpose = $_POST['u_purpose'];
        //file attachment
        $u_attachment = $_FILES['u_attachment']['name'];
        $form_accepted = "not_accepted";
        $form_judged = "not_judged";
        $form_donation_complete = "not_complete";
        $form_donation_complete_attachment = "not_complete";

        

        // print($u_name. $u_faculty. $u_id. $u_gender. $u_number. $u_email. $u_permanent_add. $u_local_add. $u_amount_need. $u_purpose. $u_attachment);
        // echo "working";
        $find_copy = "SELECT u_email FROM wanting_donation WHERE u_email = ? and form_judged = ? and form_donation_complete <> ? ";
        $pre_statemnt = $conn->prepare($find_copy);
        // echo "working";
        $judged = "judged";
        $not_complete = " not_complete";
        $pre_statemnt->bind_param("sss", $user_email, $judged, $not_complete);
        $pre_statemnt->execute();
        $pre_statemnt->bind_result($user_email);
        $pre_statemnt->store_result();
        $num_of_result = $pre_statemnt->num_rows();
        // echo "working";
        if($num_of_result == 0 ){
            $pre_statemnt->close();
            $directory = "user_uploaded_files/";
            $u_attachment = $directory.$_FILES['u_attachment']['name'];
            $insert = "INSERT INTO wanting_donation (u_name, u_faculty, u_id, u_gender, u_number, u_email, u_permanent_add,
             u_local_add, u_amount_need, u_purpose, u_attachment, form_accepted,form_judged, form_donation_complete, form_donation_complete_attachment) 
             VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $pre_statemnt = $conn->prepare($insert);
            // echo "working";
            $pre_statemnt->bind_param("sssssssssssssss", $u_name, $u_faculty, $u_id, $u_gender, $u_number, $u_email, $u_permanent_add,
             $u_local_add, $u_amount_need, $u_purpose, $u_attachment, $form_accepted, $form_judged, $form_donation_complete, $form_donation_complete_attachment);
            $pre_statemnt->execute();

            // move inserted file in a folder
            $directory = $directory.rand(0,100000)."__".basename($_FILES["u_attachment"]["name"]);
            move_uploaded_file($_FILES['u_attachment']['tmp_name'], "$directory");
            echo " recorded";
        }
        else{
            echo "ERROR!! may be one of your requested donation has been judged but not completed yet...";
            // echo "working";
        }

    }
    
?>