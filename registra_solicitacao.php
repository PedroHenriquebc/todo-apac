<?php 
    print_r($_POST);

    echo '<br>';

    echo($_POST['departamento']);
    echo '<br>';
    echo($_POST['assunto']);
    echo '<br>';
    echo($_POST['descricao']);
    echo '<br>';
    echo($_POST['prioridade']);
    echo '<br>';
    
    // header('Location: abrir_solicitacao.php');
?>