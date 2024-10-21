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
        $_id = $_POST['_id'];
        //file attachment
        $_attached = $_FILES['_attached']['name'];

        // move inserted file in a folder AND DATABASE
        $directory = "authority_uploaded_files/";
        $_attached = $directory.$_FILES["_attached"]["name"];
        $insert = "UPDATE wanting_donation 
            SET form_donation_complete_attachment = '$_attached'
            where donation_id= '$_id'";
        $pre_statemnt = $conn->prepare($insert);
        $pre_statemnt->execute();
        $directory = $directory.rand(0,100000)."__".basename($_FILES["_attached"]["name"]);
        move_uploaded_file($_FILES['_attached']['tmp_name'], "$directory");
        echo " recorded";
        header('Location: authority.php#wants_donate');
    }
    
?>