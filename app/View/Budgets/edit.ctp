<?php
/**
 *
 * @author Gustavo Souza Gon�alves
 */
?>

<body>
    <form method="post" name="BudgetEditForm" action="">
        <h2 align="center">Edi��o de Conta:</h2>
        <?php
        echo $this->Form->create('Budget', array('action' => 'edit'));
        echo $this->Form->input('name');
        echo $this->Form->input('modified');
        
        echo $this->Form->end('Salvar edi��o');
        ?>
    </form>        
</body>
