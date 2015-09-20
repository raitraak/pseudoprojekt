<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="?" method="POST">
    <input name="kass">
    <input type='submit'>
</form>

<?php
$kass1 = $_POST['kass'];

if ($kass1['kass'])
{
    echo 'Kass oli: '.$_POST['kass'];
}


?>

</body>
</html>

