<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
<input type="text" id="mail" placeholder="name@mail.com" size="30"/>
<input type="submit" value="Check" name="check" onclick="Javascript:checkmail();"/>
<div id="result"></div>
<script type="text/javascript">

    function checkmail(){
        var mail = document.getElementById('mail');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!filter.test(mail.value)){
            alert('Meiliaadress ei vasta õigele formaadile!');
            mail.focus;
            return false;
        }
        else{
            alert('Sisestatud meil on korrektne!');
            $.get('api.php',{checkmail:mail.value},function(data){
                $('#result').text(data);
            });
            return true;
        }
    }
</script>