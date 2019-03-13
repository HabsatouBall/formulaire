 <?php 
 echo '<img src="hb.png" ,with="10px",height="12px">'.'<br />';
$coordonnees = array (
    'prenom' => 'habsatou',
    'nom' => 'ball',
    'adresse' => 'Aere lao',
    'identifiant stock' => '2017081V8',
    'profession' => 'etudiant',
    'tel' => '777936929');

foreach($coordonnees as $cle => $element)
{
    echo '' . $cle . ' : ' . $element . '<br />';
}
?>
