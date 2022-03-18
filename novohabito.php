<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/novohabito.css">
        <title>Cadastrar novo hábito</title>
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Novo Hábito</h1>
            </header>
            <main>
                <div class="form">
                    <form action="inserthabito.php" method="GET">
                        <label>
                            <span>Nome:</span>
                            <input type="text" class="input" name="nome" id="nome" placeholder="Ex.: comer demais">
                        </label>
                        
                        <button type="submit">Criar</button>
                        
                    </form>
                </div>
            </main>
        </div>
    </body>
</html>