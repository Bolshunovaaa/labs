<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = isset($_POST["first_name"]) ? trim($_POST["first_name"]) : "";
        $lastName = isset($_POST["last_name"]) ? trim($_POST["last_name"]) : "";

        if (!empty($firstName) && !empty($lastName)) {
            echo "Привіт, $firstName $lastName!";
        } else {
            echo "Будь ласка, заповніть усі поля.";
        }
    } else {
        echo "Форма не була відправлена.";
    }
?>
