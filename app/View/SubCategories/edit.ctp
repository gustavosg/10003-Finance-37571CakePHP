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
        echo $this->Form->create('SubCategory', array('action' => 'edit'));
        echo $this->Form->input('category_id', array('options' => $Category, 'class' => 'Category', 'type'=>'select', 'label'=>'Categoria:', 'default'=>'1'));
        echo $this->Form->input('name');
        echo $this->Form->input('modified');
        
        echo $this->Form->end('Salvar edi��o');
        ?>


    </form>        

</body>
