<?php
include("config.php");
$result = mysqli_query($mysql, "SELECT" * FORM user ORDER BY id DESC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Dumbways</title>
</head>
<body>
    <table width="80%" border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
    </tr>
    
    <?php
        while($user =
        mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>". $user['id']
            ."</td>";
            echo "<td>". $user['name']
            ."</td>";
            echo "<td>". $user['email']
            ."</td>";
            echo "</tr>";
        }
    </table>

</body>
</html>