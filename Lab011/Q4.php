<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Days of Week</h1>

    <form method="post">
        <label for="num">enter number (1 to 7):</label>
        <input type="number" name="num" id="num" min="1" max="7" required>
        <input type="submit" value=" Day">
    </form>

    <?php
    // PHP code to display the day of the week
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        $dayName = "";

        switch ($num) {
            case 1:
                $dayName = "Monday";
                break;
            case 2:
                $dayName = "Tuesday";
                break;
            case 3:
                $dayName = "Wednesday";
                break;
            case 4:
                $dayName = "Thursday";
                break;
            case 5:
                $dayName = "Friday";
                break;
            case 6:
                $dayName = "Saturday";
                break;
            case 7:
                $dayName = "Sunday";
                break;
            default:
                $dayName = "Invalid number";
                break;
        }

        echo "<p>name of the day: $dayName</p>";
    }
    ?>

</body>
</html>
