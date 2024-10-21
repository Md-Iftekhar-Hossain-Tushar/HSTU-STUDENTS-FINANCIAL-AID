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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>HSTU STUDENTS’ FINANCIAL AID</title>
    <link rel="stylesheet" href="Home_page.css">
    </head>

<body>
    <div class="fullcontainer banner" id="homesection">
        <header>
            <div class="container">
                <div class="logo">
                    <img src="Home_page_images/logo.png" alt="logo">
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="#homesection">Home</a>
                        </li>
                        <li>
                            <a href="#photos">Photos</a>
                        </li>
                        
                        <li>
                            <a href="#programsection">programs</a>
                        </li>
                        <li>
                            <a href="#donation">Donation</a>
                        </li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                        <li>
                            <a href="log_page.php">Login</a>
                        </li>
                        
                        
                    </ul>

                </nav>
            </div>

            </header>
            <!--header end here-->
            <div class="container">
                <h1>HSTU STUDENTS’ FINANCIAL AID</h1>
                <p>
                This financial support system is a comprehensive software solution designed to streamline and optimize the process of 
                managing donations for organizations and non-profit entities. This abstract provides an overview of the key features
                and functionalities of the DMS, highlighting its potential to enhance efficiency, transparency, and impact in the realm 
                of charity system for the university students.<br>
                This serves as a centralized platform that facilitates the entire lifecycle of donations, from initial donor engagement 
                to fund allocation and reporting. It leverages modern technology to address challenges commonly faced by organizations 
                in effectively managing and utilizing the contributions they receive.


                </p>
            </div>
                      
    </div>
            <!--home section end here-->
            <!--image swipers section starts here-->
<main id="photos">
    <!-- <div class="allcard"> -->
    <div id="_photos">
    <h2 class="sectiontitle">Photos</h2>
    </div>
    <?php
    $flag=(int)4;
    if ($result->num_rows > 0) {
        while( $flag !=0 && $row = $result->fetch_assoc()) {
            $flag--;
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
    <div class="seemore"><a href="photos.php"><button>See More</button></a></div>
    
</main>
<!--Programs section ends here-->
<!--Programs section starts here-->
<section class="programs" >
    <div class="container" id="programsection">
        <h2 class="sectiontitle">Programs</h2>
        <div class="boxcontainer">
            <div class="box">
                <div class="cardimage"></div>
                <div class="programtitle">Every qualifier must be admitted</div>
                
            </div>
            <!--box end-->
            <div class="box">
                <div class="cardimage"></div>
                <div class="programtitle">Enrollment of a student must be done</div>
                
            </div>
            <!--box end-->
            <div class="box">
                <div class="cardimage"></div>
                <div class="programtitle">Basic needs of a student must be fulfilled</div>
                
            </div>
            <!--box end-->
            <div class="box">
                <div class="cardimage"></div>
                <div class="programtitle">Student and his family members' health must be sound enough</div>
                
            </div>
            <!--box end-->
        </div>
        <!--boxcontainer end-->
    </div>
</section>
<!--program section end here-->
</section>
<!--program section end here-->

<!--donation section starts here-->
<section class="fullcontainer" id="donation">
    <div class="container" id="donation">
    <h2 class="sectiontitle">Donation</h2>
        <div class="cards">
            <div class="donationBox">
                <div class="title">Give Donation</div>
                <p>
                    here you can donate the amount money
                </p>
                <a href="log_page.php"><button >
                    APPLY
                </button></a>
            </div>
            <!--Donation box end-->
            <div class="volunteerBox">
                <div class="title">Take Donation</div>
                <p>
                    here you can take the amount of money
                </p>
                <a href="log_page.php"><button >
                    APPLY
                </button></a>
            </div>
        
        </div>
    </div>
</section>

<!--donation section ends here-->
<!--about section starts here-->
<section class="fullcontainer" id="aboutsection" >
    <div class="container"id="about">
        <h2 class="sectiontitle">About us</h2>
        <p>
            This financial support system is a comprehensive software solution designed to streamline and optimize the process of 
            managing donations for organizations and non-profit entities. This abstract provides an overview of the key features
            and functionalities of the DMS, highlighting its potential to enhance efficiency, transparency, and impact in the realm 
            of charity system for the university students.
            This serves as a centralized platform that facilitates the entire lifecycle of donations, from initial donor engagement 
            to fund allocation and reporting. It leverages modern technology to address challenges commonly faced by organizations 
            in effectively managing and utilizing the contributions they receive.
            Here you can directly give money to us. Insted of sending cheques through the mail or donating
            at in-person events, you can give money instant by just clicking
            ith online fundraising, the barrier to entry is lower compared to conventional fundraising.
            It’s very simple and straightforward to set up a fundraising platform.<br>
            Easy to implement: Online donation tools are easily integrated into a nonprofit's existing
            website and marketing efforts, which can help to streamline the fundraising process.<br>
            Security: Online donation tools are more secure and can protect both donors and the nonprofit
            from fraud.<br>
            Notifications and reminders: Nonprofits can set up automatic notifications and reminders to
            donors, which can help increase engagement and encourage repeat donations. This allows
            nonprofits to connect with donors who started but haven’t completed the donation process.<br>
            Personalize donor communications: Report on donations can be used to identify patterns and
            trends in donor behavior, improve retention and engagement, and allow for personalized
            communication
        </p>
    </div>
</section>

<!--about section ends here-->
<!--contacts section starts here-->
<footer >
    <div class="container" id="contact">
        
        <!--newslettercontainer-->
        <div class="linkscontainer">
            <div class="title">Useful Links</div>
            <ul>
            <li>
                <a href="#homesection">Home</a>
            </li>
            <li>
                <a href="#photos">Photos</a>
            </li>
            
            <li>
                <a href="#programsection">programs</a>
            </li>
            <li>
                <a href="#donation">Donation</a>
            </li>
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
            <li>
                <a href="log_page.php">Login</a>
            </li>
            </ul>

        </div>
        <!--links container-->
        <div class="connectcontainer">
            <div class="title">
                connect with us
            </div>
        <p>
            Hajee Mohammad Danesh Science & Technology University<br>
            Basherhat, N508, 5200
        </p>
        <p>
            azizurrahmanmaruf@gmail.com (+880)1766643155
        </p>
        <p>
            mdihtuhar@gmail.com (+880)1738207727
        </p>
        <p>
            rakib@gmail.com (+880)1611580264
        </p>
        
        </div>
        <!--connectcontainer-->
    </div>
</footer> 

<!--footer section start here-->
</body>
</html>
