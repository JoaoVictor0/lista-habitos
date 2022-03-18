<?php 
    //Obtém a lista de hábitos do banco de dados MySql

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "listahabitos";

    // CAbre a conexão com banco de dados
    $conexao = new mysqli($servidor, $usuario, $senha, $db);

    // Verifica se houve erro ao abrir a  conexão
    if($conexao->connect_error) {
        die("Falha na conexão: ". $conexao->connect_error);
    }

    // Busca nome que foi recebido via GET através do form de cadastro
    $nome = $_GET["nome"];

    // Insere o hábito na tabela habito
    $sql = "INSERT INTO habito (nome, status) VALUES ('$nome', 'A')";

    // Verifica se ocorreu tudo bem, Caso houver erro, fecha a conexão
    // e aborta o programa.
    if(!($conexao->query($sql) === TRUE)) {
        $conexao->close();
        die("Erro: ".$sql."<br>".$conexao->error);
    }

    //Fecha a conexão com o bd
    $conexao->close();

    //Envia para a página index onde aparece a lista de hábitos
    // já com o novo hábito cadastrado
    header("Location: index.php");
?>