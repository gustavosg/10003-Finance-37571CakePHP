<?php
/**
 *
 * @author Gustavo Souza Gonçalves
 */
?>

<body>
    <form method="post" name="form" action="">
        <h1 align="center">Edição de Conta:</h1>

        <?php
        echo $this->Form->create('Account', array('action' => 'edit'));
        echo $this->Form->input('name');
        echo $this->Form->input('modified');
        
        echo $this->Form->end('Salvar edição');
        ?>


    </form>        

</body>
