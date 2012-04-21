<?php
/* ------------------------------------------------------------------------------------------------------------------------
 * DADOS DO SISTEMA
 * ------------------------------------------------------------------------------------------------------------------------
 * Nome:		Finance-37571
 * Área:		Finanças
 * ------------------------------------------------------------------------------------------------------------------------
 * DADOS DA APLICAÇÃO
 * ------------------------------------------------------------------------------------------------------------------------
 * Nome:        Report
 * Descrição:   Responsável pelo retorno e gravação de dados no Banco de Dados, tabela Account
 * ------------------------------------------------------------------------------------------------------------------------
 * DADOS DO ARQUIVO
 * ------------------------------------------------------------------------------------------------------------------------
 * Nome:        report.ctp
 * Descrição:   
 * Autor:       37571 Gustavo Souza Gonçalves & 38441 Marco Aurélio D. Acaroni
 * Data:        21/04/2012
 * ------------------------------------------------------------------------------------------------------------------------
 * CONTROLE DE VERSÃO
 * ------------------------------------------------------------------------------------------------------------------------ */
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>

        <h1 align="center">Contas Cadastradas:</h1>
        <table>
            <tr>
                <td>id</td>
                <td>Nome:</td>
                <td>Data de Criação:</td>
                <td>Data de Modificação:</td>

            </tr>
            <?php foreach ($Accounts as $account): ?>
                <tr>
                    <td><?php echo $account['Account']['id']; ?></td>
                    <td><?php echo $this->Html->link($account['Account']['name'], array('controller' => 'accounts', 'action' => 'find', $account['Account']['id'])); ?></td>
                    <td><?php echo $account['Account']['created']; ?></td>
                    <td><?php echo $account['Account']['modified']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
