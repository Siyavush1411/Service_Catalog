<?php
$date = date('Y-m-d'); // Форматируем дату правильно
?>

<footer>
    <div class="container">
        <div class="footer-content">
            <p class="callback"><a href="tel:+123456789">+123 456 789</a></p>
            <p class="footer-text">Все права *ВОЗМОЖНО*защищены &copy; <?php echo date('Y'); ?></p>
            <div class="date">
                <?php echo $date; ?>
            </div>
        </div>
    </div>
</footer>
