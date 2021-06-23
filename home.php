
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Conversion Site</title>
</head>

<body>

    <h1>Page 1 [Home]</h1>
    <br>


   
    <h1>Convertion Site</h1> <br>
    1.<a href="home.php"> Home</a>

    2.<a href="conversion-rate.php"> Conversion Rate</a>

    3.<a href="history.php"> History</a>
    <h1>Converter :</h1>

    <form action="action=" <?php $_SERVER['PHP_SELF']; ?>" method="POST"">
		<label for=" type">Select Category:</label>
        <select id="type" name="type">
            <option value="fit-to-inch">Fit to Inch</option>
            <option value="inch-to-fit">Inch to Fit</option>
        </select>
<br><br><br>
        <label for="value1">value</label>
        <input type="text" id="value1" name="value1">
        <input type="submit" name="submit" value="Submit">
<br><br><br>
        <label for="value2">Result</label>
        <input type="text" id="value2" name="value2">

        
    </form>
    </body>

