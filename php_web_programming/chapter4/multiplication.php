<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title></head>
<body>
<table border="1">
    <tr>
        <td>&nbsp&nbsp</td>
        <?php
        for ($cols = 1; $cols <= 9; $cols++) {
            print("<td>$cols</td>");
        }
        ?>
    </tr>

    <?php
    for ($rows = 1; $rows <= 9; $rows++) {
        print("<tr>\n");
        print("<td>$rows</td>");
        for ($cols = 1; $cols <= 9; $cols++) {
                print"<td>".$rows*$cols."</td>";
        }
        print "</tr>\n";
    }

    ?>
</table>
</body>
</html>
