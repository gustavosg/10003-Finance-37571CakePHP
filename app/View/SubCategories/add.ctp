
    <body>
        <form id="CategoriesForm" method="post" action="add">
            <h1 align="center">Entre com as informa��es:</h1>
            <?php
            echo $this->Form->create('Category');
            echo $this->Form->input('name', array('label'=> 'Nome:'));
            echo $this->Form->input('category_id', array('options' => $Category, 'class' => 'Category', 'type'=>'select', 'label'=>'Categoria:'));
            echo $this->Form->input('created', array('label'=> 'Data de Cria��o:'));
            echo $this->Form->end('Gravar categoria');
            ?>
        </form>
    </body>
