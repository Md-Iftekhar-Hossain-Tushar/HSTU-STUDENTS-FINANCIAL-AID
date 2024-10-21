<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form_for_wanting_donation.css">
    <title>Donation Wanting Form</title>
</head>
<body>
    <div class="center">
        <div class="header_class">
            <h1>Donation Wanting Form</h1>
        </div>

        <div class="form_class">
            <form class="form_contents" action="form_for_wanting_donation2.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="name">Full Name: </label>
                    <br>
                    <input type="text" name="u_name" id="name" placeholder="Enter your name">
                </div>
                <br>
                
                <div class="faculty" >
                    <label for="faculty">Faculty Name: </label>
                    <select name="u_faculty" id="faculty" >
                        <option value="Agriculture">Agriculture</option>
                        <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                        <option value="Business Studies">Business Studies</option>
                        <option value="Fisheries">Fisheries</option>
                        <option value="Veterinary and Animal Science">Veterinary and Animal Science</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Science">Science</option>
                        <option value="Social Science">Social Science</option>
                    </select>
                </div>
                <br>

                <div>
                    <label for="sid">Student ID: </label>
                    <br>
                    <input type="text" name="u_id" id="sid" placeholder="Enter your student id">
                </div>
                <br>
                <div class="gender">
                    <label style="float:left; width:30%; padding-top: 7px;" >Gender:</label>
                    
                    <input style="float:left; width:7%;" id="_male" type="radio" name="u_gender" id="_male" value="male" />
                    <label style="float:left; width:25%; padding-top: 7px;" for="_male">Male</label>
                    <label  style="float:right; width:25%;  padding-top: 7px;" for="_female">Female</label> 
                    <input style="float:right; width:7%;"  id="_female" type="radio" name="u_gender" id="_female" value="female" />
                    
                </div>
                <br>
                <br>
                <br>
                <div>
                    <label for="contact">Contact Number: </label>
                    <br>
                    <input type="text" name="u_number" id="contact" placeholder="Enter your contact number">
                 </div>
                 <br>   
                 <div>
                    <label for="email">Email: </label>
                    <br>
                    <input type="text" name="u_email" id="email" value=<?php if(isset($_GET['updateid'])){
                    $updateid = $_GET['updateid']; echo $updateid;}?>>
                 </div>
                 <br>
                 <div>
                    <label for="p_add">Permanent address: </label>
                    <br>
                    <textarea rows="5" name="u_permanent_add" id="p_add" placeholder="enter your permanent address" ></textarea>
                 </div>
                    
                 <br>
                 <div>
                    <label for="l_add">Local address: </label>
                    <br>
                    <textarea rows="5" name="u_local_add" id="l_add" placeholder="enter your local address" ></textarea>
                 </div>

                 <br>
                 <div>
                    <label for="need">Amount to need: </label>
                    <br>
                    <input type="text" name="u_amount_need" id="need" placeholder="enter your needed amount">
                 </div>
                 <br>
                 <div>
                    <label for="perpose">Purpose of getting money: </label>
                    <br>
                    <textarea rows="5" name="u_purpose" id="purpose" placeholder="enter your purpose to get money"></textarea>
                 </div>
                 
                 <br>
                 <div>
                    <label for="attached">Attach your student id card</label>
                    <br>
                    <input type="file" name="u_attachment" id="attached" accept="application/pdf">
                 </div>
                 <br>
                 <div class="submit_text">
                    <input type="submit" value="Submit">
                </div>
                <br>
                 


            </form>
        </div>

    </div>
</body>
</html>