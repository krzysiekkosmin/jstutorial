<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form php</title>
</head>
<body>
    
    <?php
        $fullname = $email = $gender = $comment = $number = $age = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fullname = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $number = test_input($_POST["number"]);
            $comment = test_input($_POST["comment"]);
            $gender = test_input($_POST["gender"]);
            $age = test_input($_POST["age"]);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

    ?>

    <h2> Form Validation</h2>
    <form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">

    </form>

</body>
</html>