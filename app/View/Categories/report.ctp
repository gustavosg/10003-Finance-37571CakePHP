<?php
/* ------------------------------------------------------------------------------------------------------------------------
 * DADOS DO SISTEMA
 * ------------------------------------------------------------------------------------------------------------------------
 * Nome:		Finance-37571
 * �rea:		Finan�as
 * ------------------------------------------------------------------------------------------------------------------------
 * DADOS DA APLICA��O
 * ------------------------------------------------------------------------------------------------------------------------
 * Nome:        Report
 * Descri��o:   Respons�vel pelo retorno e grava��o de dados no Banco de Dados, tabela Categorie
 * ------------------------------------------------------------------------------------------------------------------------
 * DADOS DO ARQUIVO
 * ------------------------------------------------------------------------------------------------------------------------
 * Nome:        report.ctp
 * Descri��o:   
 * Autor:       37571 Gustavo Souza Gon�alves & 38441 Marco Aur�lio D. Acaroni
 * Data:        21/04/2012
 * ------------------------------------------------------------------------------------------------------------------------
 * CONTROLE DE VERS�O
 * ------------------------------------------------------------------------------------------------------------------------ */
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>

        <h1 align="center">Categorias Cadastradas:</h1>
        <table>
            <tr>
                <td>id</td>
                <td>Nome:</td>
                <td>Data de Cria��o:</td>
                <td>Data de Modifica��o:</td>

            </tr>
            <?php foreach ($Categories as $category): ?>
                <tr>
                    <td><?php echo $category['Category']['id']; ?></td>
                    <td><?php echo $this->Html->link($category['Category']['name'], array('controller' => 'Categories', 'action' => 'find', $category['Category']['id'])); ?></td>
                    <td><?php echo $category['Category']['created']; ?></td>
                    <td><?php echo $category['Category']['modified']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
