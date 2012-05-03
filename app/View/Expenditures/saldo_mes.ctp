<body>
    <h1 align="center"> Saldo Total</h1>
    <table align="center" border="2" rules="All">
        <tr>
            <td>Valor:</td>
            <td>Data:</td>
        </tr>
        <?php
        for ($month = 1; $month <= 12; $month++) {
            if (strlen($month) == 1)
                $month = '0' . $month;

            foreach ($Expenditure as $result) {
                echo "<tr>";
                echo "<td> R$:" . $result[0]['total'] . "</td>";
                echo "<td> " . $result['br']['data'] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>