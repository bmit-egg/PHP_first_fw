<html>
<body>

<form action="?addPlayer" method="post">
<p>Player: <input type="text" name="player" /></p>
<p><input type="submit" value ="Add Player"/></p>
</form>
<?php
    $player_list = array();

function addPlayer() {
    array_push($player_list, $_POST['player']);
    print_r($player_list);
    }
function pickWinner(){
    $random_player = array_rand($player_list, 1);
    print_r($player_list[$random_player]);
    unset($player_list[$random_player]);
    var_dump($player_list);
    
    $player_list_new = array_values($player_list);
}

foreach($player_list AS $Player){
    echo $Player;
}
?>
<form action="?pickWinner" method="post">
<p><input type="submit" value="Pick Winner"/></p>
</form>

excel
</body>
</html>