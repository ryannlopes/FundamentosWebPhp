<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "aula";
    $link = mysqli_connect($host, $user, $pass, $bd);

    //Dados
    $nomeEstado = "Sao Paulo";

    $query = "INSERT INTO estado(nomeEstado) VALUES ('$nomeEstado')";
    if(mysqli_query($link, $query)){
        echo "Criado com sucesso";
    }else{
        echo "Usuario não Criado"
    }
    mysqli_close($link);
?>