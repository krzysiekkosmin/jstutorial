<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $pets = htmlspecialchars($_POST["favouritepet"]);

    if (empty($firstname)){
        exit();
        header("Location: ../index.php");
    }
    echo "Dane wprowadzone";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $pets;

    header("Location: ../index.php");
}else{
    header("Location: ../index.php");
}

?>