<html>
<head>
<script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>

<script type="text/javascript"> 
$(document).ready(function(){
    $('.button').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = 'ajax.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
        });
    });

});
</script>
</head>

<body>
<form action="functioncalling.php">
	Lampu 1:
    <input type="submit" class="button" name="Lampu1Nyala" value="1nyala" />
    <input type="submit" class="button" name="Lampu1Mati" value="1mati" /> <br>
	Lampu 2:
    <input type="submit" class="button" name="Lampu2Nyala" value="2nyala" />
    <input type="submit" class="button" name="Lampu2Mati" value="2mati" /> <br>
	Lampu 3:
    <input type="submit" class="button" name="Lampu3Nyala" value="3nyala" />
    <input type="submit" class="button" name="Lampu3Mati" value="3mati" /> <br>
	Lampu 4:
    <input type="submit" class="button" name="Lampu4Nyala" value="4nyala" />
    <input type="submit" class="button" name="Lampu4Mati" value="4mati" /> <br>
	Lampu 5:
    <input type="submit" class="button" name="Lampu5Nyala" value="5nyala" />
    <input type="submit" class="button" name="Lampu5Mati" value="5mati" /> <br>
	Lampu 6:
    <input type="submit" class="button" name="Lampu6Nyala" value="6nyala" />
    <input type="submit" class="button" name="Lampu6Mati" value="6mati" /> <br>
	Lampu 7:
    <input type="submit" class="button" name="Lampu7Nyala" value="7nyala" />
    <input type="submit" class="button" name="Lampu7Mati" value="7mati" /> <br>
	Lampu 8:
    <input type="submit" class="button" name="Lampu8Nyala" value="8nyala" />
    <input type="submit" class="button" name="Lampu8Mati" value="8mati" /> <br>
	Lampu 9:
    <input type="submit" class="button" name="Lampu9Nyala" value="9nyala" />
    <input type="submit" class="button" name="Lampu9Mati" value="9mati" /> <br>
	Lampu 10:
    <input type="submit" class="button" name="Lampu10Nyala" value="10nyala" />
    <input type="submit" class="button" name="Lampu10Mati" value="10mati" /> <br>
</form>

