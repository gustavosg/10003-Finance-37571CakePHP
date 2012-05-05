<body>
    <h2 align="center">Despesas Cadastradas:</h2>
    <table>
        <tr>
            <td>id</td>
            <td>ID SubCategoria:</td>
            <td>ID Conta:</td>
            <td>Quantia:</td>
            <td>Data:</td>
            <td>Data de Criação:</td>
            <td>Data de Modificação:</td>
            <td>Descrição:</td>
            <td>Editar:</td>
            <td>Remover:</td>

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
