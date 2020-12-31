<!DOCTYPE html>
<html lang="fr">
<head>
  
  <link rel="stylesheet"href="style.css"/>
  <title>ALLO PHP - Site de formation PHP</title>

<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
<link rel="manifest" href="favicons/site.webmanifest">
<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="favicons/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="favicons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

<meta name="description" content="Découvrez les joies de la programmation PHP sur ALLO PHP, meilleur site de formation PHP." />

</head>

<body>

<h1>Exercice 1 de PHP</h1>

<h2>Exemple a)</h2>

<?php
echo "Hello World!";
?>

<h2>Exemple b)</h2>

<?php
  $textDuParagraphe = "Hello World!";
  $entier = 7;
  $decimal = 10.5;
  $x =  12.5; // reconnait les premiers caractères comme étant un type de document
  $y = 4;
  $z = $x + $decimal;

  define("VITESSE_MAX", 300000);
  define("AGE_limite", 14);

  //echo $textDuParagraphe;
  //echo $entier;
  //echo $decimal;

  // echo $VITESSE_MAX n'est pas une variable mais une constante
  // echo VITESSE_MAX;
  // echo " ";
  // echo constant("VITESSE_MAX");


?>
<p><?php echo $z ?></p>

<h2>Exemple c)</h2>
<?php
   // Incrémentention ( ajout de 1)
    $z++;
   $z = $z + 1; // Exactement le même résultat que sur la ligne précédente
   $z += 1; // Exactement le même résultat que la ligne précédente

   // Décrémentation ( retire 1)
     $z--;
     $z = $z-1; // Exactement le même résultat que sur la ligne précédente
     $z -= 1; // Exactement le même résultat que la ligne précédente
            
       // Exemple supplémentaire
       $z = $entier + $entier +$decimal

     
     ?>
     <p><?php echo $z ?></p>

     <h2>Exemple d)<h2>
     <!--Mise en place d'une liste-->
     <ul>
        <li><?php echo $textDuParagraphe;?></li>
        <li><?php echo $entier; ?></li>
        <li><?php echo $decimal; ?></li>
        <li><?php echo $x; ?></li>
        <li><?php echo $y; ?></li>
        <li><?php echo $z; ?></li>

      </ul> 
      
      <h2>Exemple e : html dans une balise php </h2>

<?php echo "<p>".$textDuParagraphe."</p>"; // "." concaténation ?>
<?php echo "<p>"."Hello World!"."</p>"; // Exactement le même résultat que la ligne précédente ?>
<?php echo "Hello World!"; // Exactement le même résultat que la ligne précédente ?>

<?php echo "<a href='https://google.fr'>".$z."</a>" ?>
<?php echo '<a href="https://google.fr">'.$z.'</a>' // Exactement le même résultat que la ligne précédente?>

<?php echo 
    "<p>
        Sayah a dit : 
        <q cite='https://google.fr'>BONJOUR L'HISTOIRE !</q>
    <p>"
?>

<h2>Exemple f : rappels html/css </h2>

<p class="attention">
    Il faut nettoyer la plaie avant de mettre le 
    pansement sinon il y a un risque d'infection.
</p>

<p>
   Vous pouvez appeler les secours en composant le numéro.
</p>

<p class="attention">
   Veillez à être CLAIR, BREF et PRECIS sur le danger et 
   sur le lieu de l'accident
</p>

<?php print("<h2>YO !</h2>"); ?>


<h2>Exemple g : les opérateurs php </h2>

<?php 
    $x = 20;
    $y = 6;
?>
<ul>
    <li><?php echo ($x + $y); // Affiche 26 ?></li>
    <li><?php echo ($x - $y); // Affiche 14 ?></li>
    <li><?php echo ($x * $y); // Affiche 120 ?></li>
    <li><?php echo ($x / $y); // Affiche 3.3333333... ?></li>
    <li><?php echo ($x % $y); // Affiche 2 ?></li>

    <?php
        $y = 20;
        $y += 100; // similaire à "$y = $y + 100;"
        echo "<li>".$y."</li>"; // Affiche 120

        $z = 50;
        $z -= 25;
        echo "<li>".$z."</li>"; // Affiche 25

        $i = 5;
        $i *= 6; // similaire à "$i = $i * 6"
        echo "<li>".$i."</li>"; // Affiche 30

        $j = 10;
        $j /= 5;
        echo "<li>".$j."</li>"; // Affiche 2

        $k = 20;
        $k %= 7;
        echo "<li>".$k."</li>"; // Affiche 6

        $o = "Bonjour";
        $o .= ", monde ! ";
        echo "<li>".$o."</li>"; // Affiche "Bonjour, monde !"
        $o .= $o; // similaire à "$o = $o . $o"
        echo "<li>".$o."</li>"; // Affiche "Bonjour, monde ! Bonjour, monde !"

        $x = 100;
        $y = "100";
        echo "<li>";
            var_dump($x == $y); // "valeur égale à"
        echo "</li>";

        echo "<li>";
            var_dump($x === $y); // "valeur et type égaux à"
        echo "</li>";

        echo "<li>";
            var_dump($x != $y); // "valeur différente de"
        echo "</li>";

        echo "<li>";
            var_dump($x !== $y); // "valeur et types différents de"
        echo "</li>";

        $a = 50;
        $b = 90;
        echo "<li>";
            var_dump($a > $b); // "strictement supérieur à"
        echo "</li>";

        echo "<li>";
            var_dump($a >= $b); // "supérieur ou égal à"
        echo "</li>";

        echo "<li>";
            var_dump($a < $b); // "strictement inférieur à"
        echo "</li>";

        echo "<li>";
        var_dump($a <= $b); // "inférieur ou égal à"
    echo "</li>";
    ?>
</ul>

<h2>Exemple h&nbsp;: les opérateurs logiques </h2>
<ul>
    <li><?php var_dump(true AND false); // ET ?></li>
    <li><?php var_dump(true OR false); // OU ?></li>
    <li><?php var_dump(true && false); // ET ?></li>
    <li><?php var_dump(true || false); // OU ?></li>
    <li><?php var_dump(!true); // NON (ici : NON VRAI, soit FAUX) ?></li>
    <li><?php var_dump(!false); // NON (ici : NON FAUX, soit VRAI) ?></li> 
</ul>

<h2> Exemple i&nbsp;: les conditions </h2>


<?php
    $x = 3;
  echo "<p>";
    if ($x >= 10) { // 10 et +
        echo "Bonjour&nbsp;!";
    } elseif ($x < 5) {
        echo "Salut&nbsp;!"; // 0, 1, 2, 3 ou 4
    } else {
        echo "Rien à faire."; // 5, 6, 7, 8, 9
    }
    

    $favcolor = "red";
    echo "<p>";
    switch ($favcolor) {
        case "red":
            echo "Votre couleur préférée est le rouge&nbsp;!";
        break;
        case "blue":
            echo "Votre couleur préférée est le bleu&nbsp;!";
        break;
        case "green":
            echo "Votre couleur préférée est le vert&nbsp;!";
        break;
        default:
            echo "Vous n’avez pas de couleur préférée&nbsp;!";
    }
    echo "</p>";


    
    $x = 1;

    echo "<ul>";
    while($x <= 5) {
        echo "<li>$x</li>";
        $x++;
    }
    echo "</ul>";

?>
  // -Déclarer une variable $x = 1 et une variable $y = 835
  // - En utilisant la boucle "while" ajoutez successivement 1 à x
      jusqu'à qu'il soit égale à y. Dans ce cas, affichez x et y


<?php
    $x = 1;
    $y = 835;


    echo "<ul>";
    while($x <= $y) {
      
        echo "<li>$x</li>";
        echo "<li>$y</li>";
        $x++;
    }
    echo "</ul>";
?>

	
<?php

  // Donnez une variante de cet boucle do...while

$x = 1;
$y = 835;

echo"<ul>";

do
{
 $x++;
}
while( $x < $y);
echo"<li>$x</li>";
echo"<li>$y</li>";

echo"</ul>";

?>


// Une boucle qui affiche les multiples du nombre 7 inférieurs à 1000


<?php

$x = 0;
echo"<ul>";

  while ($x < 1000);
   do {
    $x = $x+7;
   }

   echo"<li>$x</li>";
   
  end{while};

  echo"</ul>";
?>

 </body>
</html>-