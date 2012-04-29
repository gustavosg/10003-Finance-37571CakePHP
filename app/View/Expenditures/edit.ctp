<?php
/**
 *
 * @author Gustavo Souza Gonçalves
 */
?>

<body>
    <form method="post" name="BudgetRecordEditForm" action="edit">
        <h1 align="center">Edição de Conta:</h1>

        <?php
        echo $this->Form->create('BudgetRecord', array('action' => 'edit'));
        echo $this->Form->input('name');
        echo $this->Form->input('modified');
        
        echo $this->Form->end('Salvar edição');
        ?>


    </form>        

</body>
