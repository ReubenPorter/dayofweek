<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day of the week</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$dayofweek = date("w");
switch($dayofweek){
    case 1:
        echo "It is Monday";
        break;
    case 2:
        echo "It is Tuesday";
        break;
    case 3:
        echo "It is Wednesday";
        break;
    case 4:
        echo "It is Thursday";
        break;
    case 5:
        echo "<p>It is Friday</p>";
        break;
    case 6:
        echo "<p>It is Saturday</p>";
        break;
    case 7:
        echo "It is Sunday";
        break;
}
?>
</body>
</html>