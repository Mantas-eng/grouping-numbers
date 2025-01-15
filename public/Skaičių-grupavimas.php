<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupių skaičiavimas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $numbers = [1, 2, 4, 7, 1, 6, 2, 8];

    function groupNumbers($numbers, $groupCount) {
        rsort($numbers);

        $groups = [];
        for ($i = 0; $i < $groupCount; $i++) {
            $groups[] = []; 
        }

        foreach ($numbers as $number) {
            $minGroupIndex = 0;
            $minSum = array_sum($groups[0]);
            for ($i = 1; $i < $groupCount; $i++) {
                $sum = array_sum($groups[$i]);
                if ($sum < $minSum) {
                    $minSum = $sum;
                    $minGroupIndex = $i;
                }
            }
            $groups[$minGroupIndex][] = $number;
        }

        return $groups;
    }

    $groupCount = 3;

    $groups = groupNumbers($numbers, $groupCount);
    ?>

    <h2>Pradiniai duomenys:</h2>
    <p><?php echo implode(", ", $numbers); ?></p>

    <h2>Rezultatai:</h2>
    <table>
        <tr>
            <th>Grupė</th>
            <th>Skaičiai</th>
            <th>Suma</th>
        </tr>
        <?php
        foreach ($groups as $index => $group) {
            echo "<tr>";
            echo "<td>Grupė " . ($index + 1) . "</td>";
            echo "<td>" . implode(", ", $group) . "</td>";
            echo "<td>" . array_sum($group) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>