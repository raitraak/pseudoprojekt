<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>

<button type="submit" onclick="punaseks()">RED</button>
<button type="submit" onclick="roheliseks()">GREEN</button>
<button type="submit" onclick="siniseks()">BLUE</button>

<script>
    function punaseks() {
        $('body').css('background','red');
    }
    function roheliseks() {
        $('body').css('background','green');
    }
    function siniseks() {
        $('body').css('background','blue');
    }
</script>
</body>
</html>