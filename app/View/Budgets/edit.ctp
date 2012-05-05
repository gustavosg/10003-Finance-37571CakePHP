<?php
/**
 *
 * @author Gustavo Souza Gonçalves
 */
?>

<body>
    <form method="post" name="BudgetEditForm" action="">
        <h2 align="center">Edição de Conta:</h2>
        <?php
        echo $this->Form->create('Budget', array('action' => 'edit'));
        echo $this->Form->input('name');
        echo $this->Form->input('modified');
        
        echo $this->Form->end('Salvar edição');
        ?>
    </form>        
</body>
