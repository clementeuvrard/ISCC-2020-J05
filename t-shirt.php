<DOCTYPE Html>

<header class="header">
   <h1>summer code camp</h1>

<?php
$nomproduit = "T-shirt simple";
$couleur = "blanc";
$prix ="10.50";
$disponible =" true";
$quantite ="10";

echo "<h3>
<p> phrase 1 le nom du produit est $nomproduit. </p>
<p> phrase 2 il reste $quantite produit en stock. </p>
<p> phrase 3 le produit $nomproduit est de la couleur $couleur.

</h3>";

echo ("<h4><p> phrase 1 acheter 3 produits couterait" ($prix * 3) ".</p></h4>");
echo ("<h4><p> phrase 2 acheter la totalité des produit disponible couterait " ($prix * 10) ".</p><h4>");
echo ("<h4><p> phrase 3 si 3 produits sont vendus, il reste ".($quantite -3). ".</p></h4>");

if ($disponible== true){
    echo"<p> le produit $nomproduit est indisponible en ligne.</p>";
}
else {
    echo"<p>le produit $nomproduit n'est malheuresement plus disponible.</p>";
}
if ($quantite>5){
    echo"<p> il reste $quantite produits en magasin. </p>";
}
elseif ($quantite==0){
    echo "<p> il ne rerste plus produits en magasin.</P>";
}
elseif ($quantite<=5){
    echo "<p>il ne reste plus que $quantite produits en magasin.</P>";
}
elseif ($quantite==1){
    echo"<p>nil ne reste qu'un produit en magasin.</p>";
}

?>


