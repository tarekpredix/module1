<!DOCTYPE html>
<html>
<head>
    <title>Even-Odd Checker</title>
</head>
<body>
    <h1>Even-Odd Checker</h1>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number" required><br><br>

        <input type="submit" name="check" value="Check">
    </form>

    <?php
    if (isset($_POST['check'])) {
        
        $number = intval($_POST['number']);

        $result = ($number % 2 == 0) ? "Even" : "Odd";

        echo "<h2>Result:</h2>";
        echo "<p>The number $number is $result.</p>";
    }
    ?>

</body>
</html>
