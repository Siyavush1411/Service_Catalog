    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="../assets/css/cardStyle.css">
    <link rel="stylesheet" href="../assets/css/ButtonStyle.css">
    <link rel="stylesheet" href="../assets/css/Style.css"> 
</head>
<body>
    <?php include '../includes/Navigationbar.php'; ?>
    
    <section class="full-screen-section">
        <div class="full-screen-content">
            <h1 class="main-heading">Продажа недвижимост</h1>
        </div>
    </section>
    
    <section>
        <div class="cardcontainer">
            

        <div class="cardcontainer">
 <?php
            // Папка с изображениями
            $dir = '../upload_images/';
            // Путь к файлу с описаниями
            $descriptionFile = '../descriptions/description.txt';

            // Получаем список файлов из папки
            $images = array_diff(scandir($dir), array('..', '.'));

            // Функция для получения описаний из файла
            function getDescriptions($file) {
                $descriptions = [];
                if (file_exists($file)) {
                    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                    foreach ($lines as $line) {
                        // Разделяем строку по символу "|"
                        list($imageName, $description) = explode('|', $line, 2);
                        $descriptions[trim($imageName)] = trim($description);
                    }
                }
                return $descriptions;
            }

            // Получаем все описания
            $descriptions = getDescriptions($descriptionFile);

            // Генерируем карточки для каждого изображения
            foreach ($images as $image) {
                // Полный путь к изображению
                $imagePath = $dir . $image;
                
                // Название файла без расширения
                $imageName = basename($image, ".jpg");

                // Получаем описание для изображения
                $description = isset($descriptions[$imageName]) ? $descriptions[$imageName] : "Описание недоступно";

                echo '<div class="card card-custom">';
                echo '<img src="' . $imagePath . '" alt="Изображение услуги" class="card-image img-fluid">';
                echo '<div class="card-body">';
                echo '<h3 class="service-name">' . $imageName . '</h3>';
                echo '<p class="description">' . $description . '</p>';
                echo '<button class="btn btn-primary">Заказать услугу</button>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        
    </section>
    
    <?php include '../includes/Footer.php'; ?>
</body>
</html>