<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    <form method="post" action="">
        <label for="test1">Test 1:</label>
        <input type="text" id="test1" name="test1" required><br><br>

        <label for="test2">Test 2:</label>
        <input type="text" id="test2" name="test2" required><br><br>

        <label for="test3">Test 3:</label>
        <input type="text" id="test3" name="test3" required><br><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    function calculateGrade($average) {
        if ($average >= 90) {
            return 'A';
        } elseif ($average >= 80) {
            return 'B';
        } elseif ($average >= 70) {
            return 'C';
        } elseif ($average >= 60) {
            return 'D';
        } else {
            return 'F';
        }
    }

    if (isset($_POST['calculate'])) {
        
        $test1 = floatval($_POST['test1']);
        $test2 = floatval($_POST['test2']);
        $test3 = floatval($_POST['test3']);

        
        $average = ($test1 + $test2 + $test3) / 3;

        
        $letterGrade = calculateGrade($average);

        
        echo "<h2>Results:</h2>";
        echo "Test 1: $test1<br>";
        echo "Test 2: $test2<br>";
        echo "Test 3: $test3<br>";
        echo "Average Score: $average<br>";
        echo "Letter Grade: $letterGrade<br>";
    }
    ?>

</body>
</html>
