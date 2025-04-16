<?php
    echo "Hello, World!<br><br>"; 

    $stringVar = "Це рядок";
    $intVar = 42;
    $floatVar = 3.14;
    $boolVar = true;

    echo "Значення змінних:<br>";
    echo "Рядок: $stringVar<br>";
    echo "Ціле: $intVar<br>";
    echo "Дрібне: $floatVar<br>";
    echo "Булеве: $boolVar<br><br>";

    echo "Типи змінних:<br>";
    var_dump($stringVar);
    echo "<br>";
    var_dump($intVar);
    echo "<br>";
    var_dump($floatVar);
    echo "<br>";
    var_dump($boolVar);
    echo "<br><br>";

    $firstName = "Катерина";
    $lastName = "Большунова";
    $fullName = $firstName . " " . $lastName;
    echo "Повне ім'я: $fullName<br><br>";

    $number = 7;
    if ($number % 2 == 0) {
        echo "Число $number є парним.<br><br>";
    } else {
        echo "Число $number є непарним.<br><br>";
    }

    echo "Цикл for (від 1 до 10):<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo $i . " ";
    }
    echo "<br><br>";

    echo "Цикл while (від 10 до 1):<br>";
    $j = 10;
    while ($j >= 1) {
        echo $j . " ";
        $j--;
    }
    echo "<br><br>";

    $student = [
        "name" => "Катерина",
        "surname" => "Большунова",
        "age" => 20,
        "speciality" => "IT"
    ];

    echo "Інформація про студента:<br>";
    echo "Ім'я: " . $student["name"] . "<br>";
    echo "Прізвище: " . $student["surname"] . "<br>";
    echo "Вік: " . $student["age"] . "<br>";
    echo "Спеціальність: " . $student["speciality"] . "<br><br>";

    $student["average_grade"] = 92.5;
    echo "Оновлена інформація про студента:<br>";
    foreach ($student as $key => $value) {
        echo ucfirst($key) . ": $value<br>";
    }
?>
