<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "aula";
    $link = mysqli_connect($host, $user, $pass, $bd);

    //Dados
    $nomeEstado = "Bahia";

    $query = "INSERT INTO estado(idEstado, nomeEstado) VALUES (default, '$nomeEstado')";


    if(mysqli_query($link, $query)){
        echo "Criado com sucesso";
    }else{
        echo "Usuario não Criado";
    }
        
    $query = "SELECT * FROM estado";
                  $busca = mysqli_query($link, $query);

                  while ($dados = mysqli_fetch_array($busca)) {
                    $id = $dados['idEstado'];
                    $nome = $dados['nomeEstado'];

                    echo $id . $nome;
                  }
    mysqli_close($link);
?>