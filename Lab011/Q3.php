<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Electrical bill calculation</h1>

    <form method="post">
        <label for="units">Enter the number of units consumed:</label>
        <input type="number" name="units" id="units" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $units = $_POST["units"];
        $totalBill = 0;

        if ($units <= 50) {
            $totalBill = $units * 3.50;
        } elseif ($units <= 100) {
            $totalBill = 50 * 3.50 + ($units - 50) * 4.00;
        } elseif ($units <= 150) {
            $totalBill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
        } else {
            $totalBill = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
        }

        echo "<p>Total Electricity Bill: Rs. " . number_format($totalBill, 2) . "</p>";
    }
    ?>

</body>
</html>
