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
        // echo "Connected: ";
        $d_name = $_POST['d_name'];
        $d_gender = $_POST['d_gender'];
        $d_contact = $_POST['d_contact'];
        $d_email = $_POST['d_email'];
        $d_address = $_POST['d_address'];
        $d_amount = $_POST['d_amount'];
        $d_banking_service = $_POST['d_banking_service'];
        $d_account = $_POST['d_account'];
        $d_transaction = $_POST['d_transaction'];
        $d_purpose = $_POST['d_purpose'];
        $d_received = "not_received";
        // echo "working";

        $find_copy = "SELECT d_account FROM giving_donation WHERE d_account = ? and d_transaction = ?";
        $pre_statemnt = $conn->prepare($find_copy);
        // echo "working";
        $pre_statemnt->bind_param("ss", $d_account, $d_transaction);
        $pre_statemnt->execute();
        $pre_statemnt->bind_result($d_account);
        $pre_statemnt->store_result();
        $num_of_result = $pre_statemnt->num_rows();
        // echo "working";

        if($num_of_result == 0 ){
            $pre_statemnt->close();
            $insert = "INSERT INTO giving_donation (d_name, d_gender, d_contact, d_email, d_address, d_amount, d_banking_service,
             d_account, d_transaction, d_purpose, d_received) 
             VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $pre_statemnt = $conn->prepare($insert);
            // echo "working";
            $pre_statemnt->bind_param("sssssssssss", $d_name, $d_gender, $d_contact, $d_email, $d_address, $d_amount, $d_banking_service,
             $d_account, $d_transaction, $d_purpose, $d_received);
            $pre_statemnt->execute();

            echo " recorded";
        }
        else{
            echo "ERROR!! Your information has been stored...";
            // echo "working";
        }

    }
    
?>