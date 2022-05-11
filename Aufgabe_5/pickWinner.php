<html>
<body>


<?php 
  shuffle($player_list);
  print_r($player_list[0]);
  unset($player_list[0]);
  var_dump($player_list);
  
  $player_list_new = array_values($player_list);
?>


</form>
</body>
</html>