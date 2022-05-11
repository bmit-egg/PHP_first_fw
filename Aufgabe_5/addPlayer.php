<html>
<body>

<form action ="pickWinner.php" method = "POST">
<button type="submit" name="button" value="Add Players"> Submit</button>
</form>

<?php 
  

    $player_list = array("");
    $new_player = $_POST['player'];
    array_push($player_list, "$new_player");
    
    shuffle($player_list);
    




?>


</form>
</body>
</html>