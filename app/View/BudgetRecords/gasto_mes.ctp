<body>
    <h1 align="center"> Gasto por m�s</h1>
    <table>
        <tr>
            <td>Valor:</td>
            <td>Data:</td>
        </tr>
        <?php
        foreach ($result as $gasto) {
            echo "<tr>";
            echo "<td> R$:" . $gasto[0] . "</td>";
            echo "<td> " . $gasto[1] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>