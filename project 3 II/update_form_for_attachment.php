<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form_for_adding_photo.css">
    <title>Add Attachment</title>
</head>
<body>
    <div class="center">
        <div class="header_class">
            <h1>Add Attachment</h1>
        </div>

        <div class="form_class">
            <form class="form_contents" action="update_form_for_attachment2.php" method="post" enctype="multipart/form-data">
                
                 <div>
                    <label for="_id">ID:</label>
                    <br>
                    <input type="text" name="_id" id="_id" value=<?php if(isset($_GET['updateid'])){
                    $updateid = $_GET['updateid']; echo $updateid;}?>>
                 </div>
                 <br>
                 <div>
                    <label for="_attached">Attachment:</label>
                    <br>
                    <input type="file" name="_attached" id="_attached">
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