<?php
/**
 *
 * @author Gustavo Souza Gon�alves
 */
?>

<body>
    <form method="post" name="CategoryEditForm" action="">
        <h2 align="center">Edi��o de Conta:</h2>

        <?php
        echo $this->Form->create('Category', array('action' => 'edit'));
        echo $this->Form->input('name');
        echo $this->Form->input('modified');
        
        echo $this->Form->end('Salvar edi��o');
        ?>


    </form>        

</body>
