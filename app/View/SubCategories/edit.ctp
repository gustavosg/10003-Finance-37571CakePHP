<?php
/**
 *
 * @author Gustavo Souza Gonçalves
 */
?>

<body>
    <form method="post" name="CategoryEditForm" action="">
        <h2 align="center">Edição de Conta:</h2>

        <?php
        echo $this->Form->create('SubCategory', array('action' => 'edit'));
        echo $this->Form->input('category_id', array('options' => $Category, 'class' => 'Category', 'type'=>'select', 'label'=>'Categoria:', 'default'=>'1'));
        echo $this->Form->input('name');
        echo $this->Form->input('modified');
        
        echo $this->Form->end('Salvar edição');
        ?>


    </form>        

</body>
