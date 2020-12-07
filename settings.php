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
    <title>Settings</title>
    <!--Below is the ajax function which shows details about plan created by the user from the server-->
    <script>
        function showDetail(email){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if (xhttp.readyState == 4 && xhttp.status == 200){
                    document.getElementById('detail').innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", "settings1.php?q=" + email, true);
            xhttp.send();
        }
    </script>
</head>
<body>
<?php require "header.php";?>
        <div class="form_container" style="border-radius: none">
            <form action="" method="POST" style="border-radius: 1px;margin-top:20px;width:40%">
            <div style="background-color:rgb(16, 146, 103);color:white">
                <h3 style="text-align:center">View details of your plan</h3>
            </div>
            <ul type="none">
            <li><label for="id">
             Email id:
            </label>
            <input type="email" name="email" class="tbox" onkeyup="showDetail(this.value)"></li>
            <span id="detail"></span>
            </form>
        </div>
        <?php require "footer.php";?>
</body>
</html>