<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="../assets/css/Card_style.css">
    <link rel="stylesheet" href="../assets/css/Button_style.css">
    <link rel="stylesheet" href="../assets/css/style.css"> 
</head>
<body>
    <?php include '../template/Navigation_bar.php'; ?>
    
    <section class="full-screen-section">
        <div class="full-screen-content">
            <h1 class="main-heading">Каталог услуг</h1>
        </div>
    </section>
    
    <section>
        <div class="cardcontainer">
            <?php 
            $i = 0;
            while ($i < 50) {
                include '../template/Card_for_services.php'; 
                $i++;
            } 
            ?>
        </div>
    </section>
    
    <?php include '../template/Footer.php'; ?>
</body>
</html>