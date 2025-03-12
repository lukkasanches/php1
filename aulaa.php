<html>
    <body>
        <?php 
        $a = $_POST["nota1"];
        $b = $_POST["nota2"];
        $c = $_POST["nota3"];
        $mediaponderada = $a * (0.2) *+ $b * (0.3) + $c * (0.5);
        echo"A media ponderada é de $mediaponderada";
        ?>
    </body>      
</html>    