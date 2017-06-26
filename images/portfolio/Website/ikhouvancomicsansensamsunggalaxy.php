<link href="styles.css" rel="stylesheet" type="text/css" />
<?
$naam = $_REQUEST['Naam'];
$straat = $_REQUEST['Straat'];
$nummer = $_REQUEST['Nr.'];
$postcode = $_REQUEST['Postcode'];
$gemeente = $_REQUEST['Gemeente'];
$telnr = $_REQUEST['Telefoonnummer'];
$kleur = $_REQUEST['Kleur'];


echo('Binnen de 48 uur ben jij, '.$naam.', trotse eigenaar van een OorFoon in '.$kleur.'.');
echo('<br/>Je OorFoon zal worden verzonden naar '.$straat.' '.$nummer.','.$postcode.' '.$gemeente.'.');
echo('<br/>Je OorFoon is geregistreerd met het nummer '.$telnr.' en zal bijgevolg dus enkel met dat nummer gebruikt kunnen worden.');

?>
<style type="text/css">
<!--
#apDiv3 {
	position:absolute;
	left:19px;
	top:60px;
	width:243px;
	height:41px;
	z-index:1;
}
-->
</style>
<div id="apDiv3"><a href="winkel.html">Ga terug </a></div>
<a href="winkel.html"></a>