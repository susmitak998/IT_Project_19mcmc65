<?php
 require "common.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/de4a40988b.js" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Create New Plan</title>
</head>
<body>
<?php require "header.php"; ?>
        <div class=form_container>
        <form action="createplan_submit.php" method="POST" style="margin-top:20px;border-top:none">
            <div style="background-color:rgb(16, 146, 103);color:white">
                <h3 style="text-align:center">Create New Plan</h3>
            </div>
            <div>
                <ul type="none">
                    <li><b>Title:</b><br><input type="text" id="title" name="title" class="tbox" placeholder="Enter title (Ex. Road trip)"></li><br>
                    <li><b>Initial Budget:</b><br><input type="text" id="budget" name="budget" class="tbox" placeholder="Initial Budget(Ex. 4000)"></li><br>
                    <li><b>From:</b><br><input type="date" min="06/12/2020" id="from_date" name="from_date"></li><br>
                    <li><b>To:</b><br><input type="date" min="06/12/2020" id="to_date" name="to_date"></li><br>
                    <li><b>How many people to add in your plan?</b><br><input type="number" id="people" name="people" class="tbox" placeholder="No. of people"></li><br>
                    <li><input type="submit" value="Submit" class="btn1"></li>
                </ul>
            </div>
        </form>
        </div>
<?php require "footer.php"; ?>    
</body>
</html>