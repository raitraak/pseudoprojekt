<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body>

<img src="pildid/kass-66103366.jpg" id="kass" onclick="koeraks()">

<script>
    $('#kass').click(function(){

        $(this).attr('src','pildid/kutsikas-koer-67073776.jpg');
    });

</script>
</body>

</html>