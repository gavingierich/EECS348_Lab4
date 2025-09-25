<!DOCTYPE html>
<html>
<head>
    <h1>Multiplication Table Page</h1>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <form action="multiplication.php" method="post">
        Size of multiplicaion table: <input type="number" name="size"><br>
        <button type="submit">Generate Table</button>
    </form>

<?php
$size = intval($_POST["size"]);
echo "<table>";

echo "<tr><th>0</th>";
for ($col = 1; $col <= $size; $col++) {
    echo "<th>$col</th>";
}
echo "</tr>";

for ($i = 1; $i <= $size; $i++) {
    echo "<tr>";
    echo "<th>$i</th>";

    for ($j = 1; $j <= $size; $j++) {
        echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>