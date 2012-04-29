<?php
/**
 *
 * @author Gustavo Souza Gonçalves
 */
?>

<body>
    <form method="post" name="CategoryEditForm" action="edit">
        <h1 align="center">Edição de Conta:</h1>

        <?php
        echo $this->Form->create('Category', array('action' => 'edit'));
        echo $this->Form->input('name');
        echo $this->Form->input('modified');
        
        echo $this->Form->end('Salvar edição');
        ?>


    </form>        

</body>
