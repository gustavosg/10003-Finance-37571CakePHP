<body>
    <h1 align="center"> Saldo Total</h1>
    <table align="center" border="2" rules="All">
        <tr>
            <td>Valor:</td>
            <td>Data:</td>
        </tr>
        <?php
        foreach ($result as $saldo) {
            echo "<tr>";
            echo "<td> R$:" . $saldo[0] . "</td>";
            echo "<td> " . $saldo[1] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>