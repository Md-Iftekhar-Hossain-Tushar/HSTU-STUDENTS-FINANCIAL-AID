<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form_for_giving_donation.css">
    <title>Donation Giving Form</title>
</head>
<body>
    <div class="center">
        <div class="header_class">
            <h1>Donation Giving Form</h1>
        </div>

        <div class="form_class">
            <form class="form_contents" action="form_for_giving_donation2.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="name">Full Name: </label>
                    <br>
                    <input type="text" name="d_name" id="name" placeholder="Enter your name" required>
                </div>
                <br>
                
                <div class="gender">
                    <label style="float:left; width:30%; padding-top: 7px;" >Gender:</label>
                    
                    <input style="float:left; width:7%;" id="_male" type="radio" name="d_gender" id="_male" value="male" required>
                    <label style="float:left; width:25%; padding-top: 7px;" for="_male">Male</label>
                    <label  style="float:right; width:25%;  padding-top: 7px;" for="_female">Female</label> 
                    <input style="float:right; width:7%;"  id="_female" type="radio" name="d_gender" id="_female" value="female" required>
                    
                </div>
                <br>
                <br>
                <br>
                <div>
                    <label for="contact">Contact Number: </label>
                    <br>
                    <input type="text" name="d_contact" id="contact" placeholder="Enter your contact number" required>
                 </div>
                 <br>   
                 <div>
                    <label for="email">Email: </label>
                    <br>
                    <input type="text" name="d_email" id="email" value=<?php if(isset($_GET['updateid'])){
                    $updateid = $_GET['updateid']; echo $updateid;}?>>
                 </div>
                 <br>
                 <div>
                    <label for="add">Address: </label>
                    <br>
                    <textarea rows="5" name="d_address" id="add" placeholder="enter your address" required></textarea>
                 </div>
                    

                 <br>
                 <div>
                    <label for="donated">Amount donated: </label>
                    <br>
                    <input type="text" name="d_amount" id="donated" placeholder="enter your donated amount" required>
                 </div>
                 <br>
                <div class="account_type" >
                    <label for="account_type">Mobile banking services: </label>
                    <select name="d_banking_service" id="account_type" required>
                        <option value="bKash">bKash</option>
                        <option value="Nagad">Nagad </option>
                        <option value="Rocket">Rocket </option>
                        <option value="MCash">MCash  </option>
                        <option value="SureCash">SureCash </option>
                        <option value="Upay">Upay </option>
                        <option value="Trust Axiata pay">Trust Axiata pay</option>
                        <option value="Nagad ">Nagad </option>
                        <option value="bKash">bKash</option>
                        <option value="Nagad ">Nagad </option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="account_number">Account Number: </label>
                    <br>
                    <input type="text" name="d_account" id="account_number" placeholder="Enter your account number from where you donated" required>
                 </div>
                 <br>
                 <div>
                    <label for="transaction">Transaction number: </label>
                    <br>
                    <input type="text" name="d_transaction" id="transaction" placeholder="enter your transaction number" required>
                 </div>
                 <br>

                 <div>
                    <label for="purpose">Purpose of giving money: </label>
                    <br>
                    <textarea rows="5" name="d_purpose" id="purpose" placeholder="enter your purpose to give money" required></textarea>
                 </div>
                 
                 <br>
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