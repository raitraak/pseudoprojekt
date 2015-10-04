<?php

$page = ($_GET['page']) ? $_GET['page'] : 'Home';
echo $page

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

    require $_GET['page'];

?>

</body>
</html>