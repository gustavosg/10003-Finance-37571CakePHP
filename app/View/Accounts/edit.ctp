<?php
/**
 *
 * 
 */
?>

<body>
    <form method="post" name="form" action="">
        <h2 align="center">Edi��o de Conta:</h2>
        <?php
        echo $this->Form->create('Account', array('action' => 'edit'));
        echo $this->Form->input('name');
        echo $this->Form->input('modified');

        echo $this->Form->end('Salvar edi��o');
        ?>


    </form>        

</body>
