<html>
<body>
    <?php
    $n1=$_POST["num1"];
    $n2=$_POST["num2"];
    $n3=$_POST["num3"];
    if($n1>$n2 && $n1>$n3){
        echo"O maior numero é $n1";
    }
    if($n2>$n1 && $n2>$n3){
        echo"O maior numero é $n2";
    }
    if($n3>$n1 && $n3>$n2){
        echo"o maior numero é $n3";
    }
    else{
        echo"os numeros sao eguais";
    }
    ?>
</body>
</html>