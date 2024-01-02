<?php
$n=$_POST['fact'];
$fact=1;
for($i=1;$i<=$n;$i++)
    $fact*=$i;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorail</title>
</head>
<body>
    <form action="fact.php" method="post">
        Enter a number:
        <input type="text" value=<?=$n?> disabled>
        <br><br><br>
        Result:
        <input type="text" value=<?=$fact?> readonly>
    </form>
</body>
</html>
