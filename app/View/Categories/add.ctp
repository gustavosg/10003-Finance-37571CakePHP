
    <body>
        <form id="CategoriesForm" method="post" action="add">
            <h2 align="center">Entre com as informações:</h2>
            <?php
            echo $this->Form->create('Category');
            echo $this->Form->input('name');
            echo $this->Form->input('created');
            echo $this->Form->hidden('modified');
            echo $this->Form->end('Gravar categoria');
            ?>
        </form>
    </body>
