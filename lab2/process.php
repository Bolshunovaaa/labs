<?php
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir);
    }

    if (isset($_FILES['fileToUpload'])) {
        $file = $_FILES['fileToUpload'];

        if (is_uploaded_file($file['tmp_name'])) {
            $allowedTypes = ['image/png', 'image/jpg', 'image/jpeg'];
            $maxSize = 2 * 1024 * 1024;

            $fileType = mime_content_type($file['tmp_name']);
            $fileSize = $file['size'];
            $fileName = basename($file['name']);
            $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);

            $targetFile = $uploadDir . $fileName;
            if (file_exists($targetFile)) {
                $fileName = pathinfo($fileName, PATHINFO_FILENAME);
                $fileName .= "_" . time() . "." . $fileExt;
                $targetFile = $uploadDir . $fileName;
            }

            if (in_array($fileType, $allowedTypes) && $fileSize <= $maxSize) {
                if (move_uploaded_file($file['tmp_name'], $targetFile)) {
                    echo "<h3>Файл успішно завантажено!</h3>";
                    echo "Ім'я файлу: $fileName<br>";
                    echo "Тип файлу: $fileType<br>";
                    echo "Розмір файлу: " . round($fileSize / 1024, 2) . " KB<br>";
                    echo "<a href='$targetFile' download>Скачати файл</a><br>";
                } else {
                    echo "Помилка при збереженні файлу.";
                }
            } else {
                echo "Дозволено лише зображення (png, jpg, jpeg) до 2MB.";
            }
        } else {
            echo "Файл не був завантажений.";
        }
    } else {
        echo "Файл не передано.";
    }
?>

<br><a href="index.html">← Назад</a>
