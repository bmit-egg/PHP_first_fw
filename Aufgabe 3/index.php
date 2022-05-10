<!DOCTYPE html>
<html>
<body>
    <form action= "index.php" method="post">
        Passwort: <input type ="text" name="pwd"/><br/>
        <input type ="Submit" value="Absenden"/>
        </form>

        <?php
    
    function passwordValidator(){
        $pwd = $_POST['pwd'];

        if (strlen($pwd) < 8 and ctype_digit( $pwd)) {
                    
                    echo "Sehr schwaches Passwort";
        } elseif (strlen($pwd) < 8 and ctype_alpha($pwd)){
            echo "Schwaches Passwort";
        }elseif(  preg_match('/\pL/', $pwd) and preg_match('/^[a-zA-Z0-9]+$/i', $pwd) and strlen($pwd) >= 8){
            echo "Starkes Passwort";
        }elseif (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $pwd) and preg_match('/\pL/', $pwd) and preg_match('/^[a-zA-Z0-9]+$/i', $pwd) and strlen($pwd) >= 8 )
            echo "Sehr starkes Passwort";
            
    }
        
        passwordValidator();


    ?>
</body>

</html>