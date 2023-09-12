<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Temperature Converter</h1>

        <?php
        $temperature = "";
        $conversionType = "";
        $result = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = $_POST["temperature"];
            $conversionType = $_POST["conversionType"];

            if ($conversionType == "celsius_to_fahrenheit") {
                $result = ($temperature * 9/5) + 32;
            } elseif ($conversionType == "fahrenheit_to_celsius") {
                $result = ($temperature - 32) * 5/9;
            }
        }
        ?>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form">
                    <div class="form-group">
                        <label for="temperature">Enter Temperature:</label>
                        <input type="number" name="temperature" id="temperature" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="conversionType">Select Conversion:</label>
                        <select name="conversionType" id="conversionType" class="form-control" required>
                            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
                            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Convert</button>
                </form>

                <?php
                if (!empty($result)) {
                    echo "<h2 class='mt-3'>Result:</h2>";
                    if ($conversionType == "celsius_to_fahrenheit") {
                        echo "<p>$temperature Celsius is $result Fahrenheit.</p>";
                    } elseif ($conversionType == "fahrenheit_to_celsius") {
                        echo "<p>$temperature Fahrenheit is $result Celsius.</p>";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
