<?php 
    if(isset($_GET['updateid']))
    {
        $id = $_GET['updateid'];
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
        $form_donation_complete="not_complete";
        $update = "UPDATE wanting_donation  
        SET form_donation_complete = '$form_donation_complete' where donation_id = '$id'";
        $pre_statemnt = $conn->prepare($update);
        $pre_statemnt->execute();

        header('Location: authority.php#wants_donate');
    }
        

    }
    
?>