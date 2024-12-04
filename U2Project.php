<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Stuff</title>
    <style>
        table, th, td {
            padding: 1em;
            border: 1px solid;
        },
        tr {
            margin: 20px
        }
    </style>
</head>
<body>
    <h1>Computer Parts</h1>
    <hr/>
    <?php
           $Computerparts = array(
            array("GEFORCE RTX 4080", 1030, 25, "MSI"),
            array("Ryzen 9 7950X", 825, 40, "AMD"),
            array("Vengance RGB Pro DDR4 Ram 64GB", 150, 50, "Corsair"),
            array("990 PRO 1TB Internal SSD PCIe Gen 4x4 NVMe", 100, 92, "Samsung")
           )    
        ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Manufacturer</th>
        </tr>
        <?php
            for ($row = 0; $row < 4; $row++) {
                echo "<tr>";
                for ($col = 0; $col < 4; $col++) {
                    echo '<td>'.$Computerparts[$row][$col].'</td>';
                }
                echo "</tr>";
            };
        ?>
    </table>
</body>
</html>