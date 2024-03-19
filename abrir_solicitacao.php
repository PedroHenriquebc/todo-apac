<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abrir Solicitação</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="exibir_solicitacoes.php">Exibir Solicitações</a></li>
                <li><a href="abrir_solicitacao.php">Abrir Solicitação</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Abrir Solicitação</h1>

        <form id="form-solicitacao" action="teste.php" method="post">
            <label for="departamento">Departamento:</label>
            <select name="departamento" id="departamento" form="form-solicitacao">
                <option value="gtic">GTIC</option>
                <option value="gmr">GMR</option>
                <option value="fisc">FISC</option>
                <option value="etc">Etc...</option>
            </select>

            <br><br>

            <label for="assunto">Assunto:</label>
            <input type="text" id="assunto" name="assunto" required>

            <br><br>

            <label for="mensagem">Descrição:</label>
            <textarea id="descricao" name="descricao" rows="5" required></textarea>

            <br><br>

            <fieldset>
                <legend>Prioridade:</legend>
                <div>
                    <label>Selecione a prioridade da sua Solicitação</label>
                    <br>    
                    <tr>
                        <td><input type="radio" id="baixa" name="prioridade" value="baixa" checked />Baixa</td>
                        <td><input type="radio" id="media" name="prioridade" value="media" />Media</td>
                        <td><input type="radio" id="alta" name="prioridade" value="alta" />Alta</td>
                        <td><input type="radio" id="urgente" name="prioridade" value="urgente"/>Urgente</td>
                    </tr>
                </div>
            </fieldset>

            <br><br>

            <fieldset>
                <legend>Anexo:</legend>
                <div>
                    <input type="file" name="anexo"></label >
                </div>
            </fieldset>

            <br><br>

            <button type="submit">Enviar Solicitação</button>
        </form>
    </div>

    
</body>

</html>