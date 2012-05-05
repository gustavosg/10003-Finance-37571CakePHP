<body>

    <form method="post" name="AccountFind" action="../find/">
        <h2 align="center">Dados da Conta:</h2>

        <?php
        echo $this->Form->input('id');
        echo $this->Form->submit('Buscar');
        ?>
        <table>
            <tr>
                <td>id</td>
                <td>Nome:</td>
                <td>Data de Criação:</td>
                <td>Data de Modificação:</td>
            </tr>
            <tr>
                <td><?php echo $Account['Account']['id']; ?></td>
                <td><?php echo $this->Html->link($Account['Account']['name'], array('controller' => 'accounts', 'action' => 'find', $Account['Account']['id'])); ?></td>
                <td><?php echo $Account['Account']['created']; ?></td>
                <td><?php echo $Account['Account']['modified']; ?></td>
            </tr>
        </table>
    </form>
</body>