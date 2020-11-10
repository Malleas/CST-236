<?php

echo "<table border='1'>";
echo "<tr>";
echo "<th>"."ID"."</th>";
echo "<th>"."First Name"."</th>";
echo "<th>"."Last Name"."</th>";
echo "</tr>";
for($i = 0; $i < count($users); $i++){

    echo "<tr>";
    echo "<td>".$users[$i]['ID']."</td>";
    echo "<td>".$users[$i]['FIRST_NAME']."</td>";
    echo "<td>".$users[$i]['LAST_NAME']."</td>";
    echo "</tr>";
}
echo "</table>";