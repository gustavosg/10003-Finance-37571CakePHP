
    <body>
        <form id="CategoriesForm" method="post" action="add">
            <h1 align="center">Entre com as informa��es:</h1>
            <?php
            echo $this->Form->create('Category');
            echo $this->Form->input('name');
            echo $this->Form->input('created');
            echo $this->Form->end('Gravar categoria');
            ?>
        </form>
    </body>