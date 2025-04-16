<?php
    $logFile = 'log.txt';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['userText'])) {
        $text = trim($_POST['userText']);
        if (!empty($text)) {
            file_put_contents($logFile, $text . PHP_EOL, FILE_APPEND);
            echo "<h3>Текст записано!</h3>";
        } else {
            echo "Порожній текст не може бути записаний.";
        }
    }

    echo "<h3>Вміст log.txt:</h3>";

    if (file_exists($logFile)) {
        $content = file_get_contents($logFile);
        echo "<pre>$content</pre>";
    } else {
        echo "Файл логів поки що порожній.";
    }
?>

<br><a href="index.html">← Назад</a>
