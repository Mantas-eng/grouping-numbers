<?php
$data = [
    ['Name' => 'Trikse', 'Color' => 'Green', 'Element' => 'Earth', 'Likes' => 'Flowers'],
    ['Name' => 'Vardenis', 'Color' => 'Blue', 'Element' => 'Air', 'Likes' => 'Singing'],
    ['Name' => 'Jonas', 'Color' => 'Pink', 'Element' => 'Water', 'Likes' => 'Dancing'],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lentelė</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2 class="main-title">Asociatyvi lentelė</h2>
    <table>
        <thead>
            <tr>
                <?php
                foreach (array_keys($data[0]) as $header) {
                    echo "<th>$header</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>