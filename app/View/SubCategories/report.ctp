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
 * Descri��o:   Respons�vel pelo retorno e grava��o de dados no Banco de Dados, tabela SubCategorie
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

        <h1 align="center">SubCategorias Cadastradas:</h1>
        <table>
            <tr>
                <td>id</td>
                <td>Nome:</td>
                <td>Data de Cria��o:</td>
                <td>Data de Modifica��o:</td>

            </tr>
            <?php foreach ($SubCategories as $SubCategory): ?>
                <tr>
                    <td><?php echo $SubCategory['SubCategory']['id']; ?></td>
                    <td><?php echo $this->Html->link($SubCategory['SubCategory']['name'], array('controller' => 'SubCategories', 'action' => 'find', $SubCategory['SubCategory']['id'])); ?></td>
                    <td><?php echo $SubCategory['SubCategory']['created']; ?></td>
                    <td><?php echo $SubCategory['SubCategory']['modified']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
