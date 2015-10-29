<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script

</head>
<body>

<style>
    .tabel {

        border: 3px solid black;
    }
    th {
        padding: 10px;
    }
    
    td {

        padding: 5px;
    }

</style>

<table class='tabel' border="1">

    <tr>
        <th>Eesnimi</th>
        <th>Perenimi</th>
        <th>Email</th>

    </tr>

</table>


<script type="text/javascript">
    $.get("api.php",function(data) {

        data=JSON.parse(data);
        for(var i in data) {

            var j = data[i];
            $('table').append("<tr><td>"+j[0]+"</td><td>"+j[1]+"</td><td>"+j[2]+"</td></tr>");
        }
    })

</script>


</body>
</html>