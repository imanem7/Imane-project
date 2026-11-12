<?php
$montant = 500;
?>

<?php if ($montant < 500) : $tauxRemise = 0 ?>
<?php elseif ($montant <= 999) : $tauxRemise = 5 ?>
<?php elseif ($montant <= 1999) : $tauxRemise = 10 ?>
<?php else : $tauxRemise = 15 ?>
<?php endif; ?>

<?php
$remise = $montant * $tauxRemise / 100;
?>

<?php
$montantFinal = $montant - $remise;
?>

<?= "Montant initial : " . $montant . " DH\n" ?>
<?= "Taux de remise : " . $tauxRemise . " %"  ?> <br>
<?= "Montant de la remise : " . $remise . " DH" ?> <br>
<?= "Montant final à payer : " . $montantFinal . " DH" ?>