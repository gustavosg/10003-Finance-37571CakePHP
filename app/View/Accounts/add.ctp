<html>
    <head>
        <title></title>
    </head>
    <body>
        <form id="AccountsForm" method="post" action="add">
            <h2 align="center">Entre com as informações:</h2>
            <?php
            echo $this->Form->create('Account');
            echo $this->Form->input('name', array('label' => 'Nome:'));
            echo $this->Form->input('created', array('label' => 'Criado em:'));
            echo $this->Form->hidden('modified');
            echo $this->Form->end('Gravar conta');
            ?>
        </form>
    </body>
</html>
