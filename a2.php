<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedTest = $_POST["test"];
    
    switch ($selectedTest) {
        case "covid":
            header("Location: t1.php");
            break;
        case "dengue":
            header("Location: t2.php");
            break;
        case "pneumonia":
            header("Location: t3.php");
            break;
        default:
            echo "Invalid test selection.";
    }
}
?>