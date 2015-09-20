<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<a href="#" id="anchor">Jääme siia</a>

<script type="text/javascript">

    var anchor = document.getElementById('anchor');

    anchor.addEventListener('click', teemidagi, false);

    function teemidagi() {
        alert('Jääme Siia!');
    }

</script>

</body>
</html>