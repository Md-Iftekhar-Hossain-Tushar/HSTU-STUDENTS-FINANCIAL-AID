<?php
    error_reporting(0);
    $dbhost = "localhost";
    $dbuser = "root"; 
    $dbpass = "";
    $db = "project 3 ii";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) ;
    // $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    if(mysqli_connect_error())
    {
        die("connection Error".mysqli_connect_errno());
    }
    if($conn)
    {
        // echo "working!";
        $sql = "SELECT * FROM photos ORDER BY photo_name" ;
        $result = $conn->query($sql);        

    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos</title>
    <link rel = "stylesheet" href="photos.css">

    <
</head>
<body>
<main id="#photos">
<?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

    ?>
    <!-- <div class="allcard"> -->
    <div class="card">
        <div class="image">
            <img src="<?php echo $row["photo_name"]; ?>">
        </div>
    </div>
    <?php
        }
    } else {
        echo "0 results";
    }
    ?>
</main>
</body>
</html>