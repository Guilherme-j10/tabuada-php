<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
            *{margin: 0px; padding: 0px; box-sizing: border-box; outline: none;}

            body{background-color: #333;}

            .global{width: 100%; min-height: 100vh; display: flex; justify-content: center; align-items: center;}
            .global form{background-color: #fff; padding: 1.5%; border-radius: 5px; display: flex; justify-content: center; align-items: center; flex-direction: column;}
            .global form label, input{width: 100%;}
            .global form label {font-family: Arial;}
            .global form  input{padding: 12px; border: none; border-bottom: solid 1px #ccc; margin: 10px;}
            .global form  button{padding: 12px; border: none; cursor: pointer; width: 100%; border-radius: 50px; background-color: #222; color: #fff; margin-bottom: 20px; font-size: 18px;}
            .global form  p{font-family: Arial;}
        </style>
    </head>
    <body>
        <div class="global">
            <form method="post">
                <label>qual tabuada deseja ?</label>
                <input type="number" name="num">
                <button type="submit" name="env">gerar tabuada</button>
                <?php tabuada();?>
            </form>
        </div>
        <?php
            function tabuada(){
                if(isset($_POST["env"])){
                    $n = $_POST["num"];
    
                    for($i = 0; $i <= 10; $i++){
                        echo "<p>".$i." x ".$n." = ".$i*$n."</p>";
                    }
                }
            }
        ?>
    </body>
</html>