<html>
<body>
    <?php
$my_array = array("Ja",
	"Zeichen deuten auf ja",
	"Es ist sicher",
	"So wie ich es sehe, ja",
	"Mit grosser Wahrscheinlichkeit",
	"Aussichten sind gut",
	"Antwort unsicher, versuch's nochmal",
	"Frag später nochmal",
	"Das sag ich dir jetzt besser nicht",
	"Kann das jetzt nicht voraussagen",
	"Konzentrier dich und frag nochmal",
	"Darauf würde ich nicht zählen",
	"Meine Antwort ist Nein",
	"Meine Quellen sagen Nein",
	"Aussichten sind nicht gut",
"Sehr zu bezweifeln");

shuffle($my_array);
print($my_array[0]);
?>
</body>
</html>
