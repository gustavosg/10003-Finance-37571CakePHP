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
 * Nome:        find.ctp
 * Descrição:   
 * Autor:       37571 Gustavo Souza Gonçalves & 38441 Marco Aurélio D. Acaroni
 * Data:        21/04/2012
 * ------------------------------------------------------------------------------------------------------------------------
 * CONTROLE DE VERSÃO
 * ------------------------------------------------------------------------------------------------------------------------ */
?>

<body>

    <form method="post" name="form" action="../find/">
        <h1 align="center">Dados da Conta:</h1>

        <?php
        echo $this->Form->input('id');
        echo $this->Form->submit('Buscar');
        ?>
        <table>
            <tr>
                <td>id</td>
                <td>Nome:</td>
                <td>Data de Criação:</td>
                <td>Data de Modificação:</td>
            </tr>
            <tr>
                <td><?php echo $Account['Account']['id']; ?></td>
                <td><?php echo $this->Html->link($Account['Account']['name'], array('controller' => 'accounts', 'action' => 'find', $Account['Account']['id'])); ?></td>
                <td><?php echo $Account['Account']['created']; ?></td>
                <td><?php echo $Account['Account']['modified']; ?></td>
            </tr>
        </table>
    </form>
</body>