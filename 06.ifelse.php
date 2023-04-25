<!DOCTYPE html>
<html>
<body>

    <?php
    echo "<h1>My first PHP script!</h1>";
    ?>

    <h2>
        <?php
        $idade = 18;

        if ($idade < 18){
            echo "Menor de Idade<br>";
        } else {
            echo "Maior de Idade<br>";
        }

        $i = 1;
        while($i <= 5){
            echo "Esse numero é: $i <br>";
            $i++; 
        }
        ?>
    </h2>

</body>
</html>