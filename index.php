<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function stampaTabella($rows,$cols) {
            $tabella = "<table style='border-collapse: collapse; font-size: 24px'>";
            for ($i = 1; $i <= $rows; $i++) {
                $tabella .= "<tr>";
                for ($k = 1; $k <= $cols; $k++) {
                    $tabella .= "<td style='padding: 10px; border: solid, 1px, black;'> ($i;$k) </td>";
                }
                $tabella .= "</tr>";
            }
            $tabella .= "</table>";
            echo $tabella;
        }
        stampaTabella(rand(1,10), rand(1,10));
    ?>
</body>
</html>