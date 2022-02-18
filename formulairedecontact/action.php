<?php $nom = $_POST['nom']; 
     $age = $_POST['age']; 
echo "Votre nom $nom"; 
echo "</br>";
echo "Votre âge $age";

$maintenant = date("y-m-d");
$diff = date_diff(date_create($_POST['age']), date_create($aujourdhui));
 echo 'Votre age est '.$diff->format('%y'); ?>
<?php
if($diff->format('%y')< 18 ) {
    header('location: https://www.gulli.fr/%27');
}else {
    header('location: https://www.amazon.com/%27');
}
?>