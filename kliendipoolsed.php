<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<a href="http://khk.ee" id="anchor">Vajuta Siia</a>

<script type="text/javascript">

    var anchor = document.getElementById('anchor');

    anchor.addEventListener('click', teemidagi, false);

    function teemidagi() {
        alert('Tere Maailm!');
    }

</script>

</body>
</html>