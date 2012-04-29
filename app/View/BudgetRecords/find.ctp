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
 * Descri��o:   Respons�vel pelo retorno e grava��o de dados no Banco de Dados, tabela BudgetRecord
 * ------------------------------------------------------------------------------------------------------------------------
 * DADOS DO ARQUIVO
 * ------------------------------------------------------------------------------------------------------------------------
 * Nome:        find.ctp
 * Descri��o:   
 * Autor:       37571 Gustavo Souza Gon�alves & 38441 Marco Aur�lio D. Acaroni
 * Data:        21/04/2012
 * ------------------------------------------------------------------------------------------------------------------------
 * CONTROLE DE VERS�O
 * ------------------------------------------------------------------------------------------------------------------------ */
?>

<body>

    <form method="post" name="BudgetRecordFind" action="../find/">
        <h1 align="center">Dados da Conta:</h1>

        <?php
        echo $this->Form->input('id');
        echo $this->Form->submit('Buscar');
        ?>
        <table>
            <tr>
                <td>id</td>
                <td>Nome:</td>
                <td>Data de Cria��o:</td>
                <td>Data de Modifica��o:</td>
            </tr>
            <tr>
                <td><?php echo $BudgetRecord['BudgetRecord']['id']; ?></td>
                <td><?php echo $this->Html->link($BudgetRecord['BudgetRecord']['name'], array('controller' => 'accounts', 'action' => 'find', $BudgetRecord['BudgetRecord']['id'])); ?></td>
                <td><?php echo $BudgetRecord['BudgetRecord']['created']; ?></td>
                <td><?php echo $BudgetRecord['BudgetRecord']['modified']; ?></td>
            </tr>
        </table>
    </form>
</body>