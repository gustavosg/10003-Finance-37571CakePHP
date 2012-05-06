<body>
    <h2 align="center">Despesas Cadastradas:</h2>
    <table align="center">
        <tr>
            <th>id</th>
            <th>ID SubCategoria:</th>
            <th>ID Conta:</th>
            <th>Quantia:</th>
            <th>Data:</th>
            <th>Data de Criação:</th>
            <th>Data de Modificação:</th>
            <th>Descrição:</th>
            <th>Editar:</th>
            <th>Remover:</th>

        </tr>
        <?php foreach ($Expenditures as $Expenditure): ?>
            <tr>
                        <td><?php
        echo $this->Html->link($Expenditure['Expenditure']['id'], array('controller' => 'expenditures', 'action' => 'find', $Expenditure['Expenditure']['id']));
            ?></td>
                <td><?php echo $Expenditure['Expenditure']['sub_category_id']; ?> </td>
                <td><?php echo $Expenditure['Expenditure']['account_id']; ?> </td>
                <td><?php
        echo $this->Html->link($Expenditure['Expenditure']['ammount'], array('controller' => 'expenditures', 'action' => 'find', $Expenditure['Expenditure']['id']));
            ?></td>
                <td><?php echo $Expenditure['Expenditure']['date']; ?> </td>
                <td><?php echo $Expenditure['Expenditure']['created']; ?></td>
                <td><?php echo $Expenditure['Expenditure']['modified']; ?></td>
                <td><?php echo $Expenditure['Expenditure']['description']; ?></td>
                <td><?php
                echo $this->Html->link($Expenditure['Expenditure']['ammount'], array('controller' => 'expenditures', 'action' => 'edit', $Expenditure['Expenditure']['id']));
            ?></td>
                <td><?php
                echo $this->Html->link($Expenditure['Expenditure']['ammount'], array('controller' => 'expenditures', 'action' => 'delete', $Expenditure['Expenditure']['id']));
            ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
