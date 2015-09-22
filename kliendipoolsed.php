<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body>

<input type="button" id="red" value="Red">
<input type="button" id="green" value="Green">
<input type="button" id="blue" value="Blue">

<script>

    $('input').click(function(){

       var varv = $(this).attr('value');
        $('body').css('background', varv);
    });



</script>
</body>

</html>