<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Lista de Hábitos</title>
    </head>
    <body>
       <div class="container">
            <header>
                <h1>Lista de Hábitos</h1>
            </header>
            <main>
                <p>
                    Cadastre aqui os hábitos que você tem que vencer para melhorar sua vida!
                </p>
                <?php 

                //Obtém a lista de hábitos do banco de dados MySql

                $servidor = "localhost";
                $usuario = "root";
                $senha = "";
                $db = "listahabitos";

                // Cria uma conexão com banco de dados

                $conexao = new mysqli($servidor, $usuario, $senha, $db);

                // Verificando a conexão

                if($conexao->connect_error) {
                    die("Falha na conexão: ". $conexao->connect_error);
                }
                
                // Executa a query da variável $sql
                $sql = "SELECT id, nome FROM habito WHERE status = 'A'";
                $resultado = $conexao->query($sql);

                //Verifica se a query retornou registros
                if($resultado->num_rows > 0) {
                    ?>

                <br>
                <table class="table-index">
                    <tbody>
                        <?php
                        //Looping pelos registros retornados
                        while($registro = $resultado->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $registro["nome"];?></td>
                                <td><a class="vencer" href="vencerhabito.php?id=<?php echo $registro['id']; ?>">Vencer</a></td>
                                <td><a class="desistir" href="desistirhabito.php?id=<?php echo $registro['id']; ?>">Desistir</a></td>
                            </tr>
                            <?php 
                        } // Fim do Looping
                            ?>
                    </tbody>
                </table>
                <p>Continue Mudando sua vida!</p>
                <p>Cadastre mais hábitos!</p>
                <?php
                } else {
                    ?>
                    <p>Você não possui hábitos cadastrados!</p>
                    <p>Comece já a mudar sua vida!</p>
                    <?php 
                
                } // Fim do IF

                // Fecha a conexão com MySql
                $conexao->close();
                ?>

                <a class="button" href="novohabito.php">Cadastrar Hábito</a>
            </main>
        </div>
    </body>
</html>