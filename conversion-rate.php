<?php 	
	
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Conversion Rate</title>
</head>

<body>

    <h1>Page 2 [Conversion Rate]</h1>
    <br>

    <h1>Convertion Site</h1> <br>
    1.<a href="home.php"> Home</a>

    2.<a href="conversion-rate.php"> Conversion Rate: </a>

    3.<a href="history.php"> History</a>
    <h1>Conversion Rate : </h1>

    <form action="action=" <?php $_SERVER['PHP_SELF']; ?>" method="POST"">
		<label for=" type"> Category:</label>
        <input type="text" id="type" name="category">
        <label for="type">Unit</label>
        <input type="text" id="type" name="Unit">
        <label for="type">Rate</label>
        <input type="text" id="type" name="Rate">
        <input type="submit" name="submit" value="Submit">


        
    </form>
    </body>

