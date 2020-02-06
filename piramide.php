<style>
    table {
        border-collapse: collapse;
        border: 1px solid black;
    }
    .tile {
        width: 50px;
        height: 50px;
    }
</style>
<?php
$table = "<table>";
$size = 10;
$color = "black";
for($i = 1;$i<=$size;$i++) {
    $table .= "<tr>";
    for($j = 0;$j<$i;$j++) {
        $table .= "<td class='tile' style='background-color:".$color.";'></td>";
    }
    $table .= "</tr>";
}
echo($table);
?>