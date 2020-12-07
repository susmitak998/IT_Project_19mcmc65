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
    <title>Homepage</title>
</head>
<body>
    <?php require "header.php"; ?>
            <div id="info"></div>
            <center>
            <form action="" method="POST" style="margin-top:20px;width:15%;padding:3%">
                <p><i class="fas fa-plus-circle"></i><a href="create_plan.php">Create new plan</a></p>
            </form>
            </center>

    <?php require "footer.php"; ?>
</body>
</html>