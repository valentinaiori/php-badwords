<h2> Esercizio: PHP Badwords</h2>

<?php

 $proverbio = 'Non è bello ciò che è bello ma è bello ciò che piace';

 $lunghezza = strlen($proverbio);

 echo $proverbio; 
?>

<div>
La lunghezza del testo è: <?php echo $lunghezza ?>
</div>

<?php

$word = $_GET["word"];

$lontano = str_replace($word, '***', $proverbio);
echo $lontano;

$lunghezza2 = strlen($lontano)

?>

<div>
    La lunghezza del nuovo testo è: <?php echo $lunghezza2 ?>
</div>

