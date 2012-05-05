<body>
    <form id="CategoriesForm" method="post" action="add">
        <h2 align="center">Entre com as informações:</h2>
        <?php
        echo $this->Form->create('SubCategory');
        echo $this->Form->input('name', array('label' => 'Nome:'));
        echo $this->Form->input('category_id', array('options' => $Category, 'class' => 'Category', 'type' => 'select', 'label' => 'Categoria:'));
        echo $this->Form->input('created', array('label' => 'Data de Criação:'));
        echo $this->Form->hidden('modified');
        echo $this->Form->end('Gravar SubCategoria');
        ?>
    </form>
</body>
