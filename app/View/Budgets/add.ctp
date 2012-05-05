
    <body>
        <form id="CategoriesForm" method="post" action="add">
            <h1 align="center">Entre com as informações:</h1>
            <?php
            echo $this->Form->create('Budget');
            echo $this->Form->input('name');
            echo $this->Form->input('created');
            echo $this->Form->hidden('modified');
            echo $this->Form->end('Gravar Orçamento');
            ?>
        </form>
    </body>
