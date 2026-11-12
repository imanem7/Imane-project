<?php 
$nombre = 20; 
?>

<?php if ($nombre % 2 == 0) : ?>
    <?= "pair" ?>
<?php else: ?>
    <?= "impair" ?>
<?php endif; ?>