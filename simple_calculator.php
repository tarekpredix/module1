<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Calculator</h1>
    
    <form method="post" action="">
        <label for="num1">Enter the first number:</label>
        <input type="text" id="num1" name="num1" required><br><br>

        <label for="num2">Enter the second number:</label>
        <input type="text" id="num2" name="num2" required><br><br>

        <label for="operation">Select an operation:</label>
        <select id="operation" name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        
        $num1 = floatval($_POST['num1']);
        $num2 = floatval($_POST['num2']);
        $operation = $_POST['operation'];

        
        $result = 0;
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<p>Error: Division by zero is not allowed.</p>";
                }
                break;
            default:
                echo "<p>Error: Invalid operation selected.</p>";
                break;
        }

        
        echo "<h2>Result:</h2>";
        echo "<p>The result of $num1 $operation $num2 is $result.</p>";
    }
    ?>
</body>
</html>
