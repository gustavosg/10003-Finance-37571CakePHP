<?php
/**
 *
 * @author Gustavo Souza Gon�alves
 */
?>

<body>
    <form method="post" name="CategoryEditForm" action="edit">
        <h1 align="center">Edi��o de Conta:</h1>

        <?php
        echo $this->Form->create('Category', array('action' => 'edit'));
        echo $this->Form->input('name');
        echo $this->Form->input('modified');
        
        echo $this->Form->end('Salvar edi��o');
        ?>


    </form>        

</body>
