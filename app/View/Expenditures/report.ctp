<body>
    <h1 align="center">Items de Or�amento Cadastrados:</h1>
    <table>
        <tr>
            <td>id</td>
            <td>Nome:</td>
            <td>Data de Cria��o:</td>
            <td>Data de Modifica��o:</td>

        </tr>
        <?php foreach ($Expenditures as $Expenditure): ?>
            <tr>
                <td><?php echo $Expenditure['Expenditure']['id']; ?></td>
                <td><?php echo $this->Html->link($Expenditure['Expenditure']['name'], array('controller' => 'categories', 'action' => 'find', $Expenditure['Expenditure']['id'])); ?></td>
                <td><?php echo $Expenditure['Expenditure']['created']; ?></td>
                <td><?php echo $Expenditure['Expenditure']['modified']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
