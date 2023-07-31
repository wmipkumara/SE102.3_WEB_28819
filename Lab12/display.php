<!DOCTYPE html>
<html>
<head>
    <title>Registration Details</title>
</head>
<body>
    <div class="container">
        <h2>Registration Details</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $Firstname = $_POST["First Name"];
            $Lastname = $_POST["ln"];
            $Username = $_POST["Username"];
            $Password = $_POST["Password"];
            $Gender = $_POST["G"];
            $Acy = $_POST["AcademicYear"]; 
            $Email = $_POST["em"]; 
            $number = $_POST["no"];





            echo "<p><strong> First Name  :</strong> " . $Firstname . "</p>";
            echo "<p><strong>Last Name:</strong> " . $ Lastname. "</p>";
            // Note: It's not secure to display the password like this, but this is just for demonstration purposes.
            echo "<p><strong>Username:</strong> " . $Username . "</p>";
            echo "<p><strong>Academic Year:</strong> " . $AcademicYear . "</p>";
            echo "<p><strong>Email Address:</strong> " . $Email . "</p>";
            echo "<p><strong>Phone Number:</strong>".$number "</p>";


        }
        ?>
    </div>
</body>
</html>
