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
 * Descri��o:   Respons�vel pelo retorno e grava��o de dados no Banco de Dados, tabela Budget
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

    <form method="post" name="BudgetFind" action="../find/">
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
                <td>Editar:</td>
                <td>Remover:</td>
            </tr>
            <tr>
                <td><?php echo $Budget['Budget']['id']; ?></td>
                <td><?php echo $this->Html->link($Budget['Budget']['name'], array('controller' => 'budgets', 'action' => 'find', $Budget['Budget']['id'])); ?></td>
                <td><?php echo $Budget['Budget']['created']; ?></td>
                <td><?php echo $Budget['Budget']['modified']; ?></td>
                <td><?php echo $this->Html->link('Editar', array('controller' => 'Budget', 'action' => 'edit', $Budget['Budget']['id'])); ?></td>
                <td><?php echo $this->Html->link('Remover', array('controller' => 'Budget', 'action' => 'delete', $Budget['Budget']['id'])); ?></td>
            </tr>
        </table>
    </form>
</body>