<html>
    <body>
    <?php
echo "<html><body><table>\n\n";
$f = fopen("Book1.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
?>
    </body>
</html>