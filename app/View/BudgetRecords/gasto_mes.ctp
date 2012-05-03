<body>
    <h1> Saldo Total</h1>
    <table>
        <tr>
            <td>Valor:</td>
            <td>Data:</td>
        </tr>
        <?php
        foreach ($BudgetRecord as $result) {

            print_r($result);
            echo "<tr>";
            echo "<td> R$:" . $result[0]['total'] . "</td>";
            echo "<td> " . $result['br']['data'] . "</td>";
            echo "</tr>";
            print_r($result);
        }
        ?>
    </table>
</body>