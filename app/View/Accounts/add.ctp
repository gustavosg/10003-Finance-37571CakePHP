<html>
    <head>
        <title></title>
    </head>
    <body>
        <form id="AccountsForm" method="post" action="add">
            <h1 align="center">Entre com as informações:</h1>
            <?php
            echo $this->Form->create('Account');
            echo $this->Form->input('name');
            echo $this->Form->input('created');
            echo $this->Form->hidden('modified');
            echo $this->Form->end('Gravar conta');
            ?>
        </form>
    </body>
</html>
