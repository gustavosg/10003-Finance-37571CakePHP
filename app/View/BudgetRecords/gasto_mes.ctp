<body>
    <h1> Saldo Total</h1>
    <table>
        <tr>
            <td>Valor:</td>
            <td>Data:</td>
        </tr>
        <?php
        foreach ($Expenditure as $result) {

            echo "<tr>";
            echo "<td> R$:" . $Total . "</td>";
            echo "<td> " . $Data . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>