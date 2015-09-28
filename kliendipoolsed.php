<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body>

<input type="button" id="luba" value="Luba Parem Klõps">

<script>

   $('*').contextmenu(function() {
       return false;
   });

       $('#luba').bind('click', function() {

           $('*').off();
           alert('Lubatud');

       });


</script>

</body>

</html>