<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="authority.css" >
    <title>User controls</title>
</head>


<body>
    <!--donation section starts here-->
    <section class="fullcontainer" id="aboutsection">
        <div class="container" id="donation">
        <h2 class="sectiontitle">DONATION</h2>
            <div class="cards">
                <div class="donationBox">
                    <div class="title">Give Donation</div>
                    <p>
                        here you can donate the amount money
                    </p>
                    <?php
                    if(isset($_GET['updateid']))
                    {
                    $updateid = $_GET['updateid'];
                    // echo $updateid;
                    echo '<a href="form_for_giving_donation.php?updateid='.$updateid.'"><button>APPLY</button></a>';
                }
                    ?>
                </div>
                <!--Donation box end-->
                <div class="volunteerBox">
                    <div class="title">Take Donation</div>
                    <p>
                        here you can take the amount of money
                    </p>
                    <?php
                    if(isset($_GET['updateid']))
                    {
                    $updateid = $_GET['updateid'];
                    // echo $updateid;
                    echo '<a href="form_for_wanting_donation.php?updateid='.$updateid.'"><button>APPLY</button></a>';
                    }
                    ?>
                </div>
            
            </div>
        </div>
    </section>

    <!--donation section ends here-->
    
    <section class="fullcontainer" id="aboutsection" >
        <div class="container"id="about">
            <h2 class="sectiontitle">Give Donation</h2>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>d_id </th>
                        <th>d_name</th>
                        <th>d_gender</th>
                        <th>d_contact</th>
                        <th>d_email</th>
                        <th>d_address</th>
                        <th>d_amount</th>
                        <th>d_banking_service</th>
                        <th>d_account</th>
                        <th>d_transaction</th>
                        <th>d_purpose</th>
                        <th>d_received</th>
                        
                    </tr>
                </thead>
                <tbody>
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
                    if(mysqli_connect_error())
                    {
                        die("connection Error".mysqli_connect_errno());
                    }
                    if($conn)
                    {
                        
                        $sql = "SELECT * FROM giving_donation WHERE d_email=$id ORDER BY d_received" ;
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $update =$row["d_id"];
                                echo "<tr>
                                <td>" .$update."</td>
                                <td>" .$row["d_name"]. "</td>
                                <td>" .$row["d_gender"]. "</td>
                                <td>" .$row["d_contact"]. "</td>
                                <td>" .$row["d_email"]. "</td>
                                <td>" .$row["d_address"]. "</td>
                                <td>" .$row["d_amount"]. "</td>
                                <td>" .$row["d_banking_service"]. "</td>
                                <td>" .$row["d_account"]. "</td>
                                <td>" .$row["d_transaction"]. "</td>
                                <td>" .$row["d_purpose"]. "</td>
                                <td>" .$row["d_received"]. "</td>
                                </tr>";
                            }
                        } else {
                            echo "0 results";
                        }
                        

                    }
                    }

                        ?>
                </tbody>
            </table>
        </div>
    </section>

    <section class="fullcontainer" id="aboutsection" >
        <div class="container"id="about">
            <h2 class="sectiontitle">Take Donation</h2>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>donation_id</th>
                        <th>u_name</th>
                        <th>u_faculty</th>
                        <th>u_id</th>
                        <th>u_gender</th>
                        <th>u_number</th>
                        <th>u_email</th>
                        <th>u_permanent_add</th>
                        <th>u_local_add</th>
                        <th>u_amount_need</th>
                        <th>u_purpose</th>
                        <th>u_attachment</th>
                        <th>form_accepted</th>
                        <th>form_judged</th>
                        <th>form_donation_complete</th>
                        <th>form_donation_complete_attachment</th>
                        
                    </tr>
                </thead>
                <tbody>
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
                    if(mysqli_connect_error())
                    {
                        die("connection Error".mysqli_connect_errno());
                    }
                    if($conn)
                    {
                        
                        $sql = "SELECT * FROM wanting_donation WHERE u_email=$id ORDER BY form_accepted,form_judged,form_donation_complete";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                <td>" .$row["donation_id"]. "</td>
                                <td>" .$row["u_name"]. "</td>
                                <td>" .$row["u_faculty"]. "</td>
                                <td>" .$row["u_id"]. "</td>
                                <td>" .$row["u_gender"]. "</td>
                                <td>" .$row["u_number"]. "</td>
                                <td>" .$row["u_email"]. "</td>
                                <td>" .$row["u_permanent_add"]. "</td>
                                <td>" .$row["u_local_add"]. "</td>
                                <td>" .$row["u_amount_need"]. "</td>
                                <td>" .$row["u_purpose"]. "</td>
                                <td>" .$row["u_attachment"]. "</td>
                                <td>" .$row["form_accepted"]. "</td>
                                <td>" .$row["form_judged"]. "</td>
                                <td>" .$row["form_donation_complete"]. "</td>
                                <td>" .$row["form_donation_complete_attachment"]. "</td>
                                </tr>";
                                
                            }
                        } else {
                            echo "0 results";
                        }
                        

                    }
                    }
                        ?>
                </tbody>
            </table>
        </div>
    </section>

         
</body>
</html>