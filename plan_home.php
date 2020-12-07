<?php
    require "common.php";
    //inserts the values of dynamic textbox in the database
    if (isset($_POST["cal"]))
	{
		$u_id = $_SESSION["id"];

		for ($b = 0; $b < count($_POST["Name"]); $b++)
		{
			$sql = "INSERT INTO persons (u_id, name, expense) VALUES ('$u_id', '" . $_POST["Name"][$b] . "', '" . $_POST["Expense"][$b] . "')";
			mysqli_query($conn, $sql) or die(mysqli_error($conn));
        }
        header("location: expDist.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/de4a40988b.js" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Control Budget</title>
    <!--Javascript function is used to create dynamic textbox-->
    <script>
	var a = 0;
	function addItem() {
		a++;

		var html = "<tr>";
			html += "<td><input type='text' name='Name[]'></td>";
			html += "<td><input type='number' name='Expense[]'></td>";
		html += "</tr>";
        //inserts the rows in the table body
		var row = document.getElementById("tbody").insertRow();
		row.innerHTML = html;
	}
</script>
</head>
<body>
    <?php require "header.php";?>

        <div class="form_container" style="margin-top:20px">
            <form action="plan_home.php" method="POST" style="width:40%">
                <div style="background-color:rgb(16, 146, 103);color:white">
                     <h3 style="text-align:center"><?php echo $_SESSION["title"]?></h3>
                </div>
                    <ul type="none">
                        <li><b>Budget:</b><br>
                            <?php 
                            $query="SELECT budget FROM dt WHERE title='$_SESSION[title]'";
                            $result=mysqli_query($conn,$query);
                            $row=mysqli_fetch_array($result);
                            ?>
                            <input type="text" id="budget" class="tbox" name="budget" placeholder="<?php echo $row["budget"]?>">
                        </li><br>
	                    <table>
		                    <tr>
			                    <th>Name</th>
			                    <th>Expense</th>
		                    </tr>

		                    <tbody id="tbody"></tbody>
	                    </table>
                        <!--on clicking add member button, creates dynamic textboxes to add details of the people of the plan and the money they spent-->
	                    <p>
		                    <button type="button" class="btn1" onclick="addItem();">Add Member</button>
                            <!--On clicking calculate button will show who owes how much-->
	                    </p>
                        <li><input type="submit" value="Calculate" name="cal" class="btn1"></li>
                    </ul>
            </form>
            </div>
    <?php require "footer.php";?>
</body>
</html>